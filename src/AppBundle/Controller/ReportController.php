<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\Nurl;
use AppBundle\Entity\Report;
use AppBundle\Form\ElectiveType;
use MongoDB\BSON\Timestamp;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\Form;
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
     * @param Request $request
     * @param Nurl $elective
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request, Nurl $elective)
    {
        $report = new Report();

        $form = $this->createFormBuilder($report)
            ->add('id', TextType::class,  ['data' => $elective -> getId(), 'disabled' => true])
            ->add('title', TextType::class,  ['data' => $elective -> getTitle(), 'disabled' => true])
            ->add('content', TextareaType::class)
            //->add('timestamp', TextType::class, ['data' => date('H:i:s \O\n d/m/Y'), 'disabled' => true])
            ->add('save', SubmitType::class, array('label' => 'Send Report'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $title = $elective->getTitle();
            $time = date('H:i:s \O\n d/m/Y');
            $report -> setTimestamp($time);
            $report->setTitle($title);
            $report = $form->getData();

             $em = $this->getDoctrine()->getManager();
             $em->persist($report);
             $em->flush();

            return $this->redirectToRoute('elective_index');
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
     * @param Report $report
     * @return \Symfony\Component\HttpFoundation\Response
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
     * @param Request $request
     * @param Report $report
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
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

    /**
     * Submits custom form
     *
     * @Route("/submit", name="report_submit")
     *
     * @Method("GET")
     *
     * @param Request $request
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function submitAction(Request $request)
    {
        $report = new Report();


        if (get('save')->isClicked()) {
            $em = $this->getDoctrine()->getManager();

            $em->persist($report);
            $em->flush($report);
        }

        return $this->render('report/show.html.twig', array(
            'report' => $report,
        ));
    }
}
