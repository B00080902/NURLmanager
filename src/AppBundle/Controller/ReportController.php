<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use AppBundle\Entity\Report;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Report controller.
 *
 * @Route("report")
 */
class ReportController extends Controller
{
    /**
     * Lists all report entities.
     *
     * @Route("/", name="report_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $reports = $em->getRepository('AppBundle:Report')->findAll();

        return $this->render('report/index.html.twig', array(
            'reports' => $reports,
        ));
    }

    /**
     * Creates a new report entity.
     *
     * @Route("/{id}/new", name="report_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, Nurl $nurl)
    {
        $report = new Report();

        $form = $this->createFormBuilder($report)
            ->add('id', TextType::class,  ['data' => $nurl -> getId(), 'disabled' => true])
            ->add('title', TextType::class,  ['data' => $nurl -> getTitle(), 'disabled' => true])
            ->add('content', TextareaType::class)
            ->add('timestamp', TextType::class, ['data' => date('H:i:s \O\n d/m/Y'), 'disabled' => true])
            ->add('save', SubmitType::class, array('label' => 'Send Report'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $title = $nurl->getTitle();
            $time = date('H:i:s \O\n d/m/Y');
            $report -> setTimestamp($time);
            $report->setTitle($title);
            $report = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();

            return $this->redirectToRoute('nurl_index');
        }


        return $this->render('report/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a report entity.
     *
     * @Route("/{id}", name="report_show")
     * @Method("GET")
     */
    public function showAction(Report $report)
    {
        $deleteForm = $this->createDeleteForm($report);

        return $this->render('report/show.html.twig', array(
            'report' => $report,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing report entity.
     *
     * @Route("/{id}/edit", name="report_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Report $report)
    {
        $deleteForm = $this->createDeleteForm($report);
        $editForm = $this->createForm('AppBundle\Form\ReportType', $report);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('report_edit', array('id' => $report->getId()));
        }

        return $this->render('report/edit.html.twig', array(
            'report' => $report,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a report entity.
     *
     * @Route("/{id}", name="report_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Report $report)
    {
        $form = $this->createDeleteForm($report);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($report);
            $em->flush();
        }

        return $this->redirectToRoute('report_index');
    }

    /**
     * Creates a form to delete a report entity.
     *
     * @param Report $report The report entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Report $report)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('report_delete', array('id' => $report->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
