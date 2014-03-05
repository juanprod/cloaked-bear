<?php

namespace Buseta\DataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

//use Buseta\DataBundle\Entity\Autobus as BaseAutobus;
//use Buseta\DataBundle\Form\Model\Autobus;

use Buseta\DataBundle\Entity\Autobus;
use Buseta\DataBundle\Form\Type\AutobusType;

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

        $entities = $em->createQueryBuilder()
            ->select('a')
            ->from('DataBundle:Autobus','a')
            ->orderBy('a.id', 'DESC')
            ->getQuery();

        //CASO CAJERO
        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            1,
            array('pageParameterName' => 'page')
        );

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
        //$entity = new BaseAutobus();

        $entity = new Autobus();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        $autobus = $request->request->get('buseta_databundle_autobus');
        /*echo '<pre>';
        var_dump($form->getErrorsAsString());die;*/

        $entity->setFechaRtv(date_create_from_format('d/m/Y',$autobus['fecha_rtv']));
        $entity->setValidoHasta(date_create_from_format('d/m/Y',$autobus['valido_hasta']));

        /*$em = $this->getDoctrine()->getManager();

        $autobus = $request->request->get('buseta_databundle_autobus');

        $em = $this->getDoctrine()->getManager();
        $entity->setMatricula($autobus['matricula']);
        $entity->setNumeroChasis($autobus['numero_chasis']);
        $entity->setNumeroMotor($autobus['numero_motor']);
        $entity->setPesoTara($autobus['peso_tara']);
        $entity->setPesoBruto($autobus['peso_bruto']);
        $entity->setNumeroPlazas($autobus['numero_plazas']);
        $entity->setNumeroCilindros($autobus['numero_cilindros']);
        $entity->setCilindrada($autobus['cilindrada']);
        $entity->setPotencia($autobus['potencia']);
        $entity->setFechaRtv(date_create_from_format('d/m/Y',$autobus['fecha_rtv']));
        $entity->setValidoHasta(date_create_from_format('d/m/Y',$autobus['valido_hasta']));

        $modelo = $em->getRepository('BusetaNomencladorBundle:Modelo')->find($autobus['modelo']);
        $entity->setModelo($modelo);

        $marca = $em->getRepository('BusetaNomencladorBundle:Marca')->find($autobus['marca']);
        $entity->setMarca($marca);

        $estilo = $em->getRepository('BusetaNomencladorBundle:Estilo')->find($autobus['estilo']);
        $entity->setEstilo($estilo);

        $color = $em->getRepository('BusetaNomencladorBundle:Color')->find($autobus['color']);
        $entity->setColor($color);

        $marcamotor = $em->getRepository('BusetaNomencladorBundle:MarcaMotor')->find($autobus['marca_motor']);
        $entity->setMarcaMotor($marcamotor);

        $combustible = $em->getRepository('BusetaNomencladorBundle:Combustible')->find($autobus['combustible']);
        $entity->setCombustible($combustible);

        //$em->persist($entity);
        //$em->flush();
        //return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));

        */

        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));
        }

        print_r($form->getErrorsAsString());die;

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

        //$form->add('submit', 'submit', array('label' => 'Create'));

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


        return $this->render('DataBundle:Autobus:new.html.twig', array(
            'entity' => $entity,
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

        //$form->add('submit', 'submit', array('label' => 'Update'));

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
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('autobus_show', array('id' => $id)));
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
        $form->submit($request);

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
            //->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
