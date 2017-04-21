<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * Collection controller.
 *
 * @Route("collection")
 * @Security("has_role('ROLE_USER')")
 */
class CollectionController extends Controller
{
    /**
     * Lists all collection entities.
     *
     * @Route("/", name="collection_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $collections = $em->getRepository('AppBundle:Collection')->findAll();

        return $this->render('collection/index.html.twig', array(
            'collections' => $collections,
        ));
    }

    /**
     * Creates a new collection entity.
     *
     * @Route("/new", name="collection_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $collection = new Collection();

        $form = $this->createFormBuilder($collection)
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('save', SubmitType::class, array('label' => 'Submit Collection'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $collection -> setUser($this->get('security.token_storage')->getToken()->getUser());

            $em = $this->getDoctrine()->getManager();
            $em->persist($collection);
            $em->flush($collection);

            return $this->redirectToRoute('collection_show', array('id' => $collection->getId()));
        }

        return $this->render('collection/new.html.twig', array(
            'collection' => $collection,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a collection entity.
     *
     * @Route("/{id}", name="collection_show")
     * @Method("GET")
     */
    public function showAction(Collection $collection)
    {
        $deleteForm = $this->createDeleteForm($collection);

        $collections = $repository = $this->getDoctrine()->getRepository('AppBundle:Collection')->findAll();

        return $this->render('collection/show.html.twig', array(
            'collection' => $collection,
            'collections' => $collections,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing collection entity.
     *
     * @Route("/{id}/edit", name="collection_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Collection $collection)
    {
        $deleteForm = $this->createDeleteForm($collection);

        $editForm = $this->createFormBuilder($collection)
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->add('public', ChoiceType::class, array(
                'choices' => array(
                    'Public' => 'Public',
                    'Private' => 'Private'
                ),
                'required' => true,
                'empty_data' => null
            ))
            ->add('save', SubmitType::class, array('label' => 'Edit Collection'))
            ->getForm();

        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($collection);
            $em->flush($collection);

            return $this->redirectToRoute('collection_show', array('id' => $collection->getId()));
        }

        return $this->render('collection/edit.html.twig', array(
            'collection' => $collection,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a collection entity.
     *
     * @Route("/{id}", name="collection_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Collection $collection)
    {
        $form = $this->createDeleteForm($collection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($collection);
            $em->flush();
        }

        return $this->redirectToRoute('collection_index');
    }

    /**
     * Creates a form to delete a collection entity.
     *
     * @param Collection $collection The collection entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Collection $collection)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('collection_delete', array('id' => $collection->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
