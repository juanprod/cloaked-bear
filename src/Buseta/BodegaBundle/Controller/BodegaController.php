<?php

namespace Buseta\BodegaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\BodegaBundle\Entity\Bodega;
use Buseta\BodegaBundle\Form\Type\BodegaType;

/**
 * Bodega controller.
 *
 */
class BodegaController extends Controller
{

    /**
     * Module Bodega entiy.
     *
     */
    public function principalAction()
    {
        return $this->render('BusetaBodegaBundle:Default:principal.html.twig');
    }


    /**
     * Lists all Bodega entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BusetaBodegaBundle:Bodega')->findAll();

        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            5,
            array('pageParameterName' => 'page')
        );

        return $this->render('BusetaBodegaBundle:Bodega:index.html.twig', array(
                'entities' => $entities,
            ));
    }
    /**
     * Creates a new Bodega entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Bodega();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('bodega_show', array('id' => $entity->getId())));
        }

        return $this->render('BusetaBodegaBundle:Bodega:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Bodega entity.
    *
    * @param Bodega $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Bodega $entity)
    {
        $form = $this->createForm(new BodegaType(), $entity, array(
            'action' => $this->generateUrl('bodega_create'),
            'method' => 'POST',
        ));

        return $form;
    }

    /**
     * Displays a form to create a new Bodega entity.
     *
     */
    public function newAction()
    {
        $entity = new Bodega();
        $form   = $this->createCreateForm($entity);

        return $this->render('BusetaBodegaBundle:Bodega:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Bodega entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Bodega')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bodega entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBodegaBundle:Bodega:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Bodega entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Bodega')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bodega entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBodegaBundle:Bodega:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Bodega entity.
    *
    * @param Bodega $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Bodega $entity)
    {
        $form = $this->createForm(new BodegaType(), $entity, array(
            'action' => $this->generateUrl('bodega_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Bodega entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Bodega')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Bodega entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('bodega_show', array('id' => $entity->getId())));
        }

        return $this->render('BusetaBodegaBundle:Bodega:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Bodega entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BusetaBodegaBundle:Bodega')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Bodega entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('bodega'));
    }

    /**
     * Creates a form to delete a Bodega entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('bodega_delete', array('id' => $id)))
            ->setMethod('DELETE')
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
