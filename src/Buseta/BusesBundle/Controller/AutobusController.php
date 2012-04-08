<?php

namespace Buseta\BusesBundle\Controller;

use Doctrine\Tests\Common\Annotations\Null;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\BusesBundle\Handle\HandleAutobus;
use Buseta\BusesBundle\Entity\Autobus;
use Buseta\BusesBundle\Form\Model\AutobusModel;
use Buseta\BusesBundle\Form\Type\AutobusType;

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
            ->from('BusetaBusesBundle:Autobus','a')
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

        return $this->render('BusetaBusesBundle:Autobus:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Creates a new Autobus entity.
     *
     */
    public function createAction(Request $request)
    {
        $entityModel = new AutobusModel();

        $form = $this->createCreateForm($entityModel);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $model = $this->get('handlebuses');
            $entity = $model->HandleAutobusNew($entityModel);

            if($model)
                return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));
            return $this->render('BusetaBusesBundle:Autobus:new.html.twig', array(
                    'entity' => $entity,
                    'form'   => $form->createView(),
                ));
        }

        print_r($form->getErrorsAsString());die;

        return $this->render('BusetaBusesBundle:Autobus:new.html.twig', array(
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
    private function createCreateForm(AutobusModel $entity)
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
        $entity = new AutobusModel();
        $form   = $this->createCreateForm($entity);

        $em = $this->getDoctrine()->getManager();

        $json = array();

        $marcas  = $em->getRepository('BusetaNomencladorBundle:Marca')->findAll();

        foreach($marcas as $m){

            $modelos = $em->getRepository('BusetaNomencladorBundle:Modelo')->findBy(array(
                    'marca' => $m->getId()
                ));

            $childrens = array();

            foreach($modelos as $modelo){
                $childrens[$modelo->getId()] = $modelo->getCodigo();
            }

            $json[$m->getId()] = array(
                'name' => $m->getCodigo(),
                'childrens' => $childrens,
            );
        }

        return $this->render('BusetaBusesBundle:Autobus:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'json'   => json_encode($json),
        ));
    }

    /**
     * Finds and displays a Autobus entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBusesBundle:Autobus:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Autobus entity.
     *
     */
    public function editAction($id)
    {
        $entity = new Autobus();

        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('BusetaBusesBundle:Autobus:edit.html.twig', array(
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
        $model = new AutobusModel();

        $model->setMatricula($entity->getMatricula());
        $model->setNumeroChasis($entity->getNumeroChasis());
        $model->setNumeroMotor($entity->getNumeroMotor());

        $model->setMarca($entity->getMarca());
        $model->setModelo($entity->getModelo());
        $model->setEstilo($entity->getEstilo());

        $model->setPesoBruto($entity->getPesoBruto());
        $model->setPesoTara($entity->getPesoTara());

        $model->setColor($entity->getColor());
        $model->setNumeroPlazas($entity->getNumeroPlazas());

        $model->setMarcaMotor($entity->getMarcaMotor());
        $model->setCombustible($entity->getCombustible());

        $model->setCilindrada($entity->getCilindrada());
        $model->setNumeroCilindros($entity->getNumeroCilindros());

        $model->setPotencia($entity->getPotencia());
        $model->setValidoHasta($entity->getValidoHasta());

        $model->setFechaRtv($entity->getFechaRtv());
        $model->setRampas($entity->getRampas());

        $model->setBarras($entity->getBarras());
        $model->setCamaras($entity->getCamaras());

        $model->setLectorCedulas($entity->getLectorCedulas());
        $model->setPublicidad($entity->getPublicidad());

        $model->setGps($entity->getGps());
        $model->setWifi($entity->getWifi());

        $form = $this->createForm(new AutobusType(), $model, array(
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

        $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->submit($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));
        }

        return $this->render('BusetaBusesBundle:Autobus:edit.html.twig', array(
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
            $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

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

    public function modelosAction($idMarca) {
        if (!$this->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY'))
            return new \Symfony\Component\HttpFoundation\Response('Acceso Denegado', 403);

        $request = $this->getRequest();
        if (!$request->isXmlHttpRequest())
            return new \Symfony\Component\HttpFoundation\Response('No es una petición Ajax', 500);

        $em = $this->getDoctrine()->getManager();
        $modelos = $em->getRepository('BusetaNomencladorBundle:Modelo')->findBy(array(
                'marca' => $idMarca
            ));

        $json = array();
        foreach ($modelos as $modelos) {
            $json[] = array(
                'id' => $modelos->getId(),
                'codigo' => $modelos->getCodigo(),
            );
        }

        return new \Symfony\Component\HttpFoundation\Response(json_encode($json), 200);
    }

}
