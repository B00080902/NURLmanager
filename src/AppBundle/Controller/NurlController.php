<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use AppBundle\Entity\Report;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Nurl controller.
 *
 * @Route("nurl")
 */
class NurlController extends Controller
{
    /**
     * Lists all nurl entities.
     *
     * @Route("/", name="nurl_index")
     *
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nurls = $em->getRepository('AppBundle:Nurl')->findAll();

        return $this->render('nurl/index.html.twig', array(
            'nurls' => $nurls,
        ));
    }

    /**
     * Lists all nurl entities.
     *
     * @Route("/seeAll", name="nurl_seeAll")
     *
     * @Method("GET")
     */
    public function allAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $em = $this->getDoctrine()->getManager();

        $nurls = $em->getRepository('AppBundle:Nurl')->findAll();

        return $this->render('nurl/all.html.twig', array(
            'nurls' => $nurls,
        ));
    }

    /**
     * Creates a new nurl entity.
     *
     * @Route("/new", name="nurl_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $nurl = new Nurl();

        // If the user is anon, it cannot post anything
        if($this->get('security.token_storage')->getToken()->getUser('anon'))
        {
            $this->addFlash(
                'notice',
                'Please login before you write a new Nurl!'
            );
            return $this->redirectToRoute('login');
        }

        $form = $this->createForm('AppBundle\Form\NurlType', $nurl);


        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {



            $nurl -> setUser($this->get('security.token_storage')->getToken()->getUser());
            $nurl -> setSuggested(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($nurl);
            $em->flush();

            return $this->redirectToRoute('nurl_show', array('id' => $nurl->getId()));
        }

        return $this->render('nurl/new.html.twig', array(
            'nurl' => $nurl,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a nurl entity.
     *
     * @Route("/{id}", name="nurl_show")
     * @Method("GET")
     */
    public function showAction(Nurl $nurl)
    {
        $deleteForm = $this->createDeleteForm($nurl);

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();

        return $this->render('nurl/show.html.twig', array(
            'nurl' => $nurl,
//            'tags' => $tags,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing nurl entity.
     *
     * @Route("/{id}/edit", name="nurl_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Nurl $nurl)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');

        $deleteForm = $this->createDeleteForm($nurl);
        $editForm = $this->createForm('AppBundle\Form\NurlType', $nurl);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('nurl_edit', array('id' => $nurl->getId()));
        }

        return $this->render('nurl/show.html.twig', array(
            'nurl' => $nurl,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a nurl entity.
     *
     * @Route("/{id}", name="nurl_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Nurl $nurl)
    {
        $form = $this->createDeleteForm($nurl);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($nurl);
            $em->flush();
        }

        return $this->redirectToRoute('nurl_index');
    }

    /**
     * Creates a form to delete a nurl entity.
     *
     * @param Nurl $nurl The nurl entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Nurl $nurl)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('nurl_delete', array('id' => $nurl->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Only Moderator can set it to approved
     *
     * @Route("/{id}/approved", name="nurl_approved")
     * @Method({"GET", "POST"})
     */
    public function approvedAction(Nurl $nurl)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $nurl -> setApproved(true);

        $em = $this->getDoctrine()->getManager();

        $em->persist($nurl);

        $em->flush($nurl);

        return $this->redirectToRoute('nurl_seeAll');
    }

    /**
     * Annon submitting a report for a nurl
     *
     * @Route("/{id}/report", name="nurl_report")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @param Nurl $nurl
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function reportAction(Request $request, Nurl $nurl)
    {

        $report = new Report();

        $form = $this->createFormBuilder($report)
            ->add('id', TextType::class,  ['data' => $nurl -> getId(), 'disabled' => true])
            ->add('title', TextType::class,  ['data' => $nurl -> getTitle(), 'disabled' => true])
            ->add('content', TextareaType::class)
            ->add('email', EmailType::class, ['required' => false])
            ->add('timestamp', TextType::class, ['data' => date('H:i:s \O\n d/m/Y'), 'disabled' => true])
            ->add('save', SubmitType::class, array('label' => 'Send Report'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if($report -> getEmail() == '')
            {
                $report -> setEmail('none');
            }
            $report -> setTimestamp(date('H:i:s \O\n d/m/Y'));
            $report->setTitle($nurl->getTitle());
            $report = $form->getData();

            $nurl -> setPublic("Private");
            $nurl -> setApproved(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($report);
            $em->flush();

            $this->addFlash(
                'notice',
                'Thanks for submitting the report!'
            );

            return $this->redirectToRoute('nurl_index');
        }


        return $this->render('report/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }


}
