<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Tag;
use AppBundle\Repository\UserRepository;
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
        $tag = new Tag();

        return $this->render('tag/index.html.twig', array(
            'tags' => $tags,
            'tag' => $tag,
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
     * Lists all proposed tags for all users.
     *
     * @Route("/proposed", name="tag_proposed")
     * @Method("GET")
     */
    public function proposedAction()
    {

        $em = $this->getDoctrine()->getManager();

        $tags = $em->getRepository('AppBundle:Tag')->findAll();

        return $this->render('tag/proposed.html.twig', array(
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

            $em = $this->getDoctrine()->getManager();

            $user = $this -> getUser();

            if($this->get('security.token_storage')->getToken()->getUser() == 'anon.')
            {
                $tags = $em->getRepository('AppBundle:User')
                    ->loadUserByUsername('anon');
                $tag -> setUser($tags);

            }

            else {
                $tag -> setUser($this->get('security.token_storage')->getToken()->getUser());
            }


            $tag -> setUpvote(0);
            $tag -> setDownvote(0);
            $tag -> setApproved(false);
            $tag -> setUserVoted('unknown');

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
        // Check if this tag has a username equal to the current one
        if($tag->getUserVoted() == $this->get('security.token_storage')->getToken()->getUser())
        {
            // Show an error if the user has already voted there
            $this->addFlash(
                'notice',
                'You have already upvoted that tag!'
            );

            // Return with the error
            return $this->redirectToRoute('tag_index');
        }

        else
        {

            $user = $this->get('security.token_storage')->getToken()->getUser()-> getUsername();

            if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
            {
                $tag -> setUpvote( $tag -> getUpvote() + 5);

                $tag -> setUserVoted($user );
            }

            else
            {
                // Set that that particular user has voted
                $tag -> setUserVoted($user);

                // Increase the tag vote by 1 or by 5 depending on the role
                $tag -> setUpvote( $tag -> getUpvote() + 1);
            }


            // Flush everything
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush($tag);
        }

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

        // Check if this tag has a username equal to the current one
        if($tag->getUserVoted() == $this->get('security.token_storage')->getToken()->getUser())
        {

            // Show an error if the user has already voted there
            $this->addFlash(

                'notice',

                'You have already downvoted that tag!'

            );

            // Return with the error
            return $this->redirectToRoute('tag_index');
        }

        else
        {

            $user = $this->get('security.token_storage')->getToken()->getUser()-> getUsername();

            if($this->get('security.authorization_checker')->isGranted('ROLE_USER'))
            {
                $tag -> setDownvote( $tag -> getDownvote() + 5);

                $tag -> setUserVoted($user );
            }

            else
            {
                // Set that that particular user has voted
                $tag -> setUserVoted($user);

                // Increase the tag vote by 1 or by 5 depending on the role
                $tag -> setDownvote( $tag -> getDownvote() + 1);
            }

            // Flush everything
            $em = $this->getDoctrine()->getManager();

            $em->persist($tag);

            $em->flush($tag);

        }

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

    public function votedUserCheck(){


    }
}
