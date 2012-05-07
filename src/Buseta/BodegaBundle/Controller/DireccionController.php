<?php

namespace Buseta\BodegaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Buseta\BodegaBundle\Entity\Direccion;
use Buseta\BodegaBundle\Form\Type\DireccionType;

/**
 * Direccion controller.
 *
 * @Route("/direccion")
 */
class DireccionController extends Controller
{

    /**
     * Lists all Direccion entities.
     *
     * @Route("/", name="direccion")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BusetaBodegaBundle:Direccion')->findAll();

        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            10,
            array('pageParameterName' => 'page')
        );

        return $this->render('BusetaBodegaBundle:Direccion:index.html.twig', array(
                'entities' => $entities,
            ));
    }
    /**
     * Creates a new Direccion entity.
     *
     * @Route("/", name="direccion_create")
     * @Method("POST")
     * @Template("BusetaBodegaBundle:Direccion:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Direccion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('direccion_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a Direccion entity.
    *
    * @param Direccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Direccion $entity)
    {
        $form = $this->createForm(new DireccionType(), $entity, array(
            'action' => $this->generateUrl('direccion_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Direccion entity.
     *
     * @Route("/new", name="direccion_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Direccion();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Direccion entity.
     *
     * @Route("/{id}", name="direccion_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Direccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Direccion entity.
     *
     * @Route("/{id}/edit", name="direccion_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Direccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Direccion entity.
    *
    * @param Direccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Direccion $entity)
    {
        $form = $this->createForm(new DireccionType(), $entity, array(
            'action' => $this->generateUrl('direccion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Direccion entity.
     *
     * @Route("/{id}", name="direccion_update")
     * @Method("PUT")
     * @Template("BusetaBodegaBundle:Direccion:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBodegaBundle:Direccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Direccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('direccion_show', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Direccion entity.
     *
     * @Route("/{id}", name="direccion_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BusetaBodegaBundle:Direccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Direccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('direccion'));
    }

    /**
     * Creates a form to delete a Direccion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('direccion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
