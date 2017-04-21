<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Nurl;
use AppBundle\Entity\Tag;
use MongoDB\Driver\Server;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Tag controller.
 *
 * @Route("tag")
 */
class TagController extends Controller
{
    /**
     * Lists all tag entities.
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
     * Creates a new tag entity.
     *
     * @Route("/new", name="tag_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tag = new Tag();

        $form = $this->createFormBuilder($tag)
            ->add('tag', TextType::class)
            ->add('nurl', EntityType::class, array(
                // query choices from this entity
                'class' => 'AppBundle:Nurl',

                // use the User.username property as the visible option string
                'choice_label' => 'title',

                // used to render a select box, check boxes or radios
                'multiple' => false,
                'expanded' => false,
            ))
            ->add('save', SubmitType::class, array('label' => 'Submit Tag'))

            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $tag -> setUser($this->get('security.token_storage')->getToken()->getUser());
            $tag -> setUpvote(0);
            $tag -> setDownvote(0);
            $tag -> setApproved(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush($tag);

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

        $editForm = $this->createFormBuilder($tag)
            ->add('tag', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Edit Tag'))
            ->getForm();

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush($tag);

            return $this->redirectToRoute('tag_show', array('id' => $tag->getId()));
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
        $session = new Session();
        $count = 0;

        $session->set('count', $count);

        if($count >= 1){
            $tag -> setUpvote( $tag -> getUpvote() + 1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($tag);
            $em->flush($tag);
            $count++;
        }
        else {
            echo '<script language="javascript">';
            echo 'alert("message successfully sent")';
            echo '</script>';
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
        $tag -> setDownvote( $tag -> getDownvote() + 1);
        $em = $this->getDoctrine()->getManager();
        $em->persist($tag);
        $em->flush($tag);

        return $this->redirectToRoute('tag_index');
    }
}
