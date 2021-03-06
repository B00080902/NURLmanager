<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Collection;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
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
        $form = $this->createForm('AppBundle\Form\CollectionType', $collection);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $collection -> setUser($this->get('security.token_storage')->getToken()->getUser());
            $collection -> setShared(false);

            $em = $this->getDoctrine()->getManager();
            $em->persist($collection);
            $em->flush();

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
        $editForm = $this->createForm('AppBundle\Form\CollectionType', $collection);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {

            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('collection_index');
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

    /**
     * When users share their/someones
     * collection it will appear under this path
     *
     * @Route("/{id}/share", name="collection_view")
     * @Method({"GET", "POST"})
     * @param Collection $collection
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function shareAction(Collection $collection)
    {
        $em = $this->getDoctrine()->getManager();

        $collections = $em->getRepository('AppBundle:Collection')->findAll();

        return $this->render('collection/shared.html.twig', array(
            'collections' => $collections
        ));
    }

    /**
     * Shares the selected entity
     *
     * @param Collection $collection The collection entity
     * @Route("/{id}", name="collection_share_share")
     * @Method({"GET", "POST"})
     */
    public function shareCollectionAction(Collection $collection)
    {
        $collection -> setShared(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($collection);
        $em->flush($collection);

        return $this->redirectToRoute('collection_index');

    }
}
