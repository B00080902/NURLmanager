<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use AppBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $nurls = $em->getRepository('AppBundle:Nurl')->findAll();

        $argsArray = [
            'nurls' => $nurls,
        ];

        $templateName = 'nurl/index';
        return $this->render($templateName . '.html.twig', $argsArray);
    }

    /**
     * Creates a new nurl entity.
     *
     * @Route("/new", name="nurl_new")
     * @Method({"GET", "POST"})
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function newAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'Unable to access this page!');
        $nurl = new Nurl();

        $form = $this->createFormBuilder($nurl)
            ->add('url', TextType::class)
            ->add('title', TextType::class)
            ->add('content', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit Nurl'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nurl -> setUser($this->get('security.token_storage')->getToken()->getUser());
            $nurl -> setUpvote(0);
            $nurl -> setDownvote(0);

            $em = $this->getDoctrine()->getManager();
            $em->persist($nurl);
            $em->flush($nurl);

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
     * @param Nurl $nurl
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function showAction(Nurl $nurl)
    {
        $deleteForm = $this->createDeleteForm($nurl);

//        $tagRepository = $repository = $this->getDoctrine()->getRepository('AppBundle:Tag');
//        $tag = new Tag();


//        $tags = $tagRepository->findBy(array('nurl_id' => $nurl -> getId()));
//
//        if($tags = $tagRepository->findAll() == $nurl -> getId())
//        {
//            echo 'hiiiiiiiii';
//        }
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
     * @param Request $request
     * @param Nurl $nurl
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
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

        return $this->render('nurl/edit.html.twig', array(
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
     * @param Request $request
     * @param Nurl $nurl
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteAction(Request $request, Nurl $nurl)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

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
     * Lists all nurl entities.
     *
     * @Route("/{id}/upvote", name="nurl_upvote")
     * @Method({"GET", "POST"})
     */
    public function upvoteAction(Nurl $nurl)
    {
        $nurl -> setUpvote( $nurl -> getUpvote() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($nurl);
        $em->flush($nurl);

        return $this->redirectToRoute('nurl_index');
    }

    /**
     * Lists all nurl entities.
     *
     * @Route("/{id}/downvote", name="nurl_downvote")
     * @Method({"GET", "POST"})
     */
    public function downvoteAction(Nurl $nurl)
    {
        $nurl -> setDownvote( $nurl -> getDownvote() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($nurl);
        $em->flush($nurl);

        return $this->redirectToRoute('nurl_index');
    }

}
