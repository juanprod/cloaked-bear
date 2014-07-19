<?php

namespace Buseta\BodegaBundle\Controller;

use Buseta\BodegaBundle\Entity\MecanismoContacto;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\BodegaBundle\Entity\Tercero;
use Buseta\BodegaBundle\Form\Type\TerceroType;
use Buseta\BodegaBundle\Form\Type\MecanismoContactoType;

/**
 * Tercero controller.
 *
 */
class TerceroController extends Controller
{

    /**
     * Lists all Tercero entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BusetaBodegaBundle:Tercero')->findAll();

        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            5,
            array('pageParameterName' => 'page')
        );

        return $this->render('BusetaBodegaBundle:Tercero:index.html.twig', array(
                'entities' => $entities,
            ));
    }
    /**
     * Creates a new Tercero entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Tercero();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tercero_show', array('id' => $entity->getId())));
        }

        return $this->render('BusetaBodegaBundle:Tercero:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Tercero entity.
    *
    * @param Tercero $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Tercero $entity)
    {
        $form = $this->createForm(new TerceroType(), $entity, array(
            'action' => $this->generateUrl('tercero_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Tercero entity.
     *
     */
    public function newAction(Request $request)
    {
        $entity = new Tercero();

        $tipo_contacto = $this->createForm(new MecanismoContactoType());

        //$entity->addMecanismoscontacto(new MecanismoContacto());

        $form   = $this->createCreateForm($entity);

        return $this->render('BusetaBodegaBundle:Tercero:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'tipo_contacto' => $tipo_contacto->createView(),
        ));
    }

    /**
     * Finds and displays a Tercero entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Tercero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tercero entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBodegaBundle:Tercero:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Tercero entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Tercero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tercero entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBodegaBundle:Tercero:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Tercero entity.
    *
    * @param Tercero $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Tercero $entity)
    {
        $form = $this->createForm(new TerceroType(), $entity, array(
            'action' => $this->generateUrl('tercero_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Tercero entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Tercero')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Tercero entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tercero_edit', array('id' => $id)));
        }

        return $this->render('BusetaBodegaBundle:Tercero:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Tercero entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BusetaBodegaBundle:Tercero')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Tercero entity.');
            }

            try {
                $em->remove($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success', 'Ha sido eliminado satisfactoriamente.');
            } catch (\Exception $e) {
                $this->get('logger')->addCritical(
                    sprintf('Ha ocurrido un error eliminando un Tercero. Detalles: %s',
                    $e->getMessage()
                ));
            }
        }

        return $this->redirect($this->generateUrl('tercero'));
    }

    /**
     * Creates a form to delete a Tercero entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tercero_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
