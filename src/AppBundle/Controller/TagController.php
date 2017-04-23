<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Tag controller.
 *
 * @Route("tag")
 */
class TagController extends Controller
{
    /**
     * Lists all APPROVED tag entities.
     *
     * @Route("/", name="tag_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();

        return $this->render('tag/index.html.twig', array(
            'tags' => $tags,
        ));
    }

    /**
     * Lists all tags for admin to see.
     *
     * @Route("/seeAll", name="tag_seeAll")
     * @Method("GET")
     */
    public function allAction()
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();

        return $this->render('tag/all.html.twig', array(
            'tags' => $tags,
        ));
    }

    /**
     * Creates a new tag entity.
     *
     * @Route("/new", name="tag_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag = new Tag();
        $form = $this->createForm('AppBundle\Form\TagType', $tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tag -> setUser($this->get('security.token_storage')->getToken()->getUser());
            $tag -> setUpvote(0);
            $tag -> setDownvote(0);
            $tag -> setVoted(0);
            $tag -> setApproved(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush();

            return $this->redirectToRoute('tag_show', array('id' => $tag->getId()));
        }

        return $this->render('tag/new.html.twig', array(
            'tag' => $tag,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tag entity.
     *
     * @Route("/{id}", name="tag_show")
     * @Method("GET")
     */
    public function showAction(Tag $tag)
    {
        $deleteForm = $this->createDeleteForm($tag);

        return $this->render('tag/show.html.twig', array(
            'tag' => $tag,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tag entity.
     *
     * @Route("/{id}/edit", name="tag_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Tag $tag)
    {
        $deleteForm = $this->createDeleteForm($tag);
        $editForm = $this->createForm('AppBundle\Form\TagType', $tag);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('tag_edit', array('id' => $tag->getId()));
        }

        return $this->render('tag/edit.html.twig', array(
            'tag' => $tag,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tag entity.
     *
     * @Route("/{id}", name="tag_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Tag $tag)
    {
        $form = $this->createDeleteForm($tag);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tag);
            $em->flush();
        }

        return $this->redirectToRoute('tag_index');
    }

    /**
     * Creates a form to delete a tag entity.
     *
     * @param Tag $tag The tag entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Tag $tag)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tag_delete', array('id' => $tag->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    /**
     * Lists all nurl entities.
     *
     * @Route("/{id}/upvote", name="tag_upvote")
     * @Method({"GET", "POST"})
     */
    public function upvoteAction(Tag $tag)
    {
        $user = $this->getUser();

        if($user->getVoted())
        {
            $tag -> setUpvote( $tag -> getUpvote() + 1);

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush($tag);
        }


        echo 'nope';

//            $tag -> setUpvote( $tag -> getUpvote() + 1);
//            $em = $this->getDoctrine()->getManager();
//            $em->persist($tag);
//            $em->flush($tag);
//
//        else {
//            echo '<script language="javascript">';
//            echo 'alert("message successfully sent")';
//            echo '</script>';
//        }

        return $this->redirectToRoute('tag_index');
    }

    /**
     * Lists all nurl entities.
     *
     * @Route("/{id}/downvote", name="tag_downvote")
     * @Method({"GET", "POST"})
     */
    public function downvoteAction(Tag $tag)
    {
        $tag -> setDownvote( $tag -> getDownvote() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($tag);
        $em->flush($tag);

        return $this->redirectToRoute('tag_index');
    }

    /**
     * Only Moderator can set it to approved
     *
     * @Route("/{id}/approved", name="tag_approved")
     * @Method({"GET", "POST"})
     * @param Tag $tag
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function approvedAction(Tag $tag)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');

        $tag -> setApproved(true);

        $em = $this->getDoctrine()->getManager();

        $em->persist($tag);

        $em->flush($tag);

        return $this->redirectToRoute('tag_index');
    }
}