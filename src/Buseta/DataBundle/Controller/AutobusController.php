<?php

namespace Buseta\DataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\DataBundle\Entity\Autobus;
use Buseta\DataBundle\Form\AutobusType;

/**
 * Autobus controller.
 *
 */
class AutobusController extends Controller
{

    /**
     * Lists all Autobus entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DataBundle:Autobus')->findAll();

        return $this->render('DataBundle:Autobus:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Autobus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Autobus();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));
        }

        return $this->render('DataBundle:Autobus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Autobus entity.
    *
    * @param Autobus $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Autobus $entity)
    {
        $form = $this->createForm(new AutobusType(), $entity, array(
            'action' => $this->generateUrl('autobus_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Autobus entity.
     *
     */
    public function newAction()
    {
        $entity = new Autobus();
        $form   = $this->createCreateForm($entity);

        $em = $this->getDoctrine()->getManager();

        $marcas = $em->getRepository('NomencladorBundle:Marca')->findAll();
        $modelos = $em->getRepository('NomencladorBundle:Modelo')->findAll();
        $estilos = $em->getRepository('NomencladorBundle:Estilo')->findAll();

        return $this->render('DataBundle:Autobus:new.html.twig', array(
            'entity' => $entity,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'estilos' => $estilos,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Autobus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBundle:Autobus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Autobus entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DataBundle:Autobus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Autobus entity.
    *
    * @param Autobus $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Autobus $entity)
    {
        $form = $this->createForm(new AutobusType(), $entity, array(
            'action' => $this->generateUrl('autobus_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Autobus entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DataBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autobus_edit', array('id' => $id)));
        }

        return $this->render('DataBundle:Autobus:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Autobus entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DataBundle:Autobus')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Autobus entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('autobus'));
    }

    /**
     * Creates a form to delete a Autobus entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('autobus_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
