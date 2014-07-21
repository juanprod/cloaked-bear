<?php

namespace Buseta\TallerBundle\Controller;

use Buseta\TallerBundle\Entity\Linea;
use Buseta\TallerBundle\Form\Type\LineaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\TallerBundle\Entity\Compra;
use Buseta\TallerBundle\Form\Type\CompraType;

/**
 * Compra controller.
 *
 */
class CompraController extends Controller
{

    /**
     * Lists all Compra entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('BusetaTallerBundle:Compra')->findAll();

        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            10,
            array('pageParameterName' => 'page')
        );

        return $this->render('BusetaTallerBundle:Compra:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Compra entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Compra();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $linea = $this->createForm(new LineaType());

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('compra_show', array('id' => $entity->getId())));
        }

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('BusetaBodegaBundle:Producto')->findAll();

        $json = array();

        foreach($productos as $p){

            $json[$p->getId()] = array(
                'nombre' => $p->getNombre(),
                'precio_salida' => $p->getPrecioSalida(),
            );
        }

        return $this->render('BusetaTallerBundle:Compra:new.html.twig', array(
            'entity' => $entity,
            'linea'  => $linea->createView(),
            'form'   => $form->createView(),
            'json'   => json_encode($json),
        ));
    }

    /**
    * Creates a form to create a Compra entity.
    *
    * @param Compra $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Compra $entity)
    {
        $form = $this->createForm(new CompraType(), $entity, array(
            'action' => $this->generateUrl('compra_create'),
            'method' => 'POST',
        ));

        //$form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Compra entity.
     *
     */
    public function newAction()
    {
        $entity = new Compra();

        $linea = new Linea();

        //$entity->addLinea($linea);

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('BusetaBodegaBundle:Producto')->findAll();

        $json = array();

        foreach($productos as $p){

            $json[$p->getId()] = array(
                'nombre' => $p->getNombre(),
                'precio_salida' => $p->getPrecioSalida(),
            );
        }

        $linea = $this->createForm(new LineaType());
        $form   = $this->createCreateForm($entity);

        return $this->render('BusetaTallerBundle:Compra:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'linea'  => $linea->createView(),
            'json'   => json_encode($json),
        ));
    }

    /**
     * Finds and displays a Compra entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaTallerBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaTallerBundle:Compra:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Compra entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaTallerBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $linea = $this->createForm(new LineaType());

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('BusetaBodegaBundle:Producto')->findAll();

        $json = array();

        foreach($productos as $p){

            $json[$p->getId()] = array(
                'nombre' => $p->getNombre(),
                'precio_salida' => $p->getPrecioSalida(),
            );
        }

        return $this->render('BusetaTallerBundle:Compra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'linea'       => $linea->createView(),
            'delete_form' => $deleteForm->createView(),
            'json'   => json_encode($json),
        ));
    }

    /**
    * Creates a form to edit a Compra entity.
    *
    * @param Compra $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Compra $entity)
    {
        $form = $this->createForm(new CompraType(), $entity, array(
            'action' => $this->generateUrl('compra_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        //$form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Compra entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaTallerBundle:Compra')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Compra entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('compra_show', array('id' => $id)));
        }

        $em = $this->getDoctrine()->getManager();
        $productos = $em->getRepository('BusetaBodegaBundle:Producto')->findAll();

        $json = array();

        foreach($productos as $p){

            $json[$p->getId()] = array(
                'nombre' => $p->getNombre(),
                'precio_salida' => $p->getPrecioSalida(),
            );
        }

        return $this->render('BusetaTallerBundle:Compra:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'json'   => json_encode($json),
        ));
    }
    /**
     * Deletes a Compra entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('BusetaTallerBundle:Compra')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Compra entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('compra'));
    }

    /**
     * Creates a form to delete a Compra entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('compra_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
