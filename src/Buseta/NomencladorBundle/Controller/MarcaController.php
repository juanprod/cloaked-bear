<?php

namespace Buseta\NomencladorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\NomencladorBundle\Entity\Marca;
use Buseta\NomencladorBundle\Form\MarcaType;

/**
 * Marca controller.
 *
 */
class MarcaController extends Controller
{

    /**
     * Lists all Marca entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NomencladorBundle:Marca')->findAll();

        return $this->render('NomencladorBundle:Marca:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Marca entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Marca();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('marca_show', array('id' => $entity->getId())));

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('marca_show', array('id' => $entity->getId())));
        }

        return $this->render('NomencladorBundle:Marca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Marca entity.
    *
    * @param Marca $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Marca $entity)
    {
        $form = $this->createForm(new MarcaType(), $entity, array(
            'action' => $this->generateUrl('marca_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Marca entity.
     *
     */
    public function newAction()
    {
        $entity = new Marca();
        $form   = $this->createCreateForm($entity);

        return $this->render('NomencladorBundle:Marca:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Marca entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NomencladorBundle:Marca:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Marca entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marca entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NomencladorBundle:Marca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Marca entity.
    *
    * @param Marca $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Marca $entity)
    {
        $form = $this->createForm(new MarcaType(), $entity, array(
            'action' => $this->generateUrl('marca_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Marca entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marca entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        $em->flush();
        return $this->redirect($this->generateUrl('marca_edit', array('id' => $id)));

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('marca_edit', array('id' => $id)));
        }

        return $this->render('NomencladorBundle:Marca:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Marca entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('NomencladorBundle:Marca')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Marca entity.');
        }

        $em->remove($entity);
        $em->flush();

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NomencladorBundle:Marca')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Marca entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('marca'));
    }

    /**
     * Creates a form to delete a Marca entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('marca_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
