<?php

namespace Buseta\NomencladorBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\NomencladorBundle\Entity\Subgrupo;
use Buseta\NomencladorBundle\Form\SubgrupoType;

/**
 * Subgrupo controller.
 *
 */
class SubgrupoController extends Controller
{

    /**
     * Lists all Subgrupo entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('NomencladorBundle:Subgrupo')->findAll();

        return $this->render('NomencladorBundle:Subgrupo:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Subgrupo entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Subgrupo();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('subgrupo_show', array('id' => $entity->getId())));
        }

        return $this->render('NomencladorBundle:Subgrupo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a Subgrupo entity.
    *
    * @param Subgrupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(Subgrupo $entity)
    {
        $form = $this->createForm(new SubgrupoType(), $entity, array(
            'action' => $this->generateUrl('subgrupo_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Subgrupo entity.
     *
     */
    public function newAction()
    {
        $entity = new Subgrupo();
        $form   = $this->createCreateForm($entity);

        return $this->render('NomencladorBundle:Subgrupo:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Subgrupo entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Subgrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subgrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NomencladorBundle:Subgrupo:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Subgrupo entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Subgrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subgrupo entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('NomencladorBundle:Subgrupo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Subgrupo entity.
    *
    * @param Subgrupo $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Subgrupo $entity)
    {
        $form = $this->createForm(new SubgrupoType(), $entity, array(
            'action' => $this->generateUrl('subgrupo_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Subgrupo entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('NomencladorBundle:Subgrupo')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Subgrupo entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('subgrupo_edit', array('id' => $id)));
        }

        return $this->render('NomencladorBundle:Subgrupo:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Subgrupo entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('NomencladorBundle:Subgrupo')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Subgrupo entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('subgrupo'));
    }

    /**
     * Creates a form to delete a Subgrupo entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('subgrupo_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
