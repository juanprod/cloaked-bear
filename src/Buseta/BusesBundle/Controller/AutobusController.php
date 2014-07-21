<?php

namespace Buseta\BusesBundle\Controller;

use Buseta\BusesBundle\Entity\ArchivoAdjunto;
use Buseta\BusesBundle\Form\Model\FileModel;
use Buseta\BusesBundle\Form\Type\ArchivoAdjuntoType;
use Doctrine\Tests\Common\Annotations\Null;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\BusesBundle\Handle\HandleAutobus;
use Buseta\BusesBundle\Form\Model\AutobusModel;
use Buseta\BusesBundle\Form\Type\AutobusType;
use Buseta\BusesBundle\Form\Filtro\BusquedaAutobusType;
use Symfony\Component\Security\Core\User\UserInterface;
use Buseta\BusesBundle\Entity\Autobus;



/**
 * Autobus controller.
 *
 */
class AutobusController extends Controller
{
    /**
     * Module Autobus entiy.
     *
     */
    public function principalAction()
    {
        return $this->render('BusetaBusesBundle:Default:principal.html.twig');
    }


    /**
     * Lists all Autobus entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $busqueda = $this->createForm(new BusquedaAutobusType());

        if($request->getMethod() === 'GET'){
            $busqueda->submit($request);

            if($busqueda->isValid()){

                $entities = $em->getRepository('BusetaBusesBundle:Autobus')->buscarAutobus($busqueda,$em);
            }
        }
        else
        {
            $entities = $em->getRepository('BusetaBusesBundle:Autobus')->buscarTodos($em);
        }

        //CASO BUSQUEDA-AUTOBUS
        $paginator = $this->get('knp_paginator');
        $entities = $paginator->paginate(
            $entities,
            $this->get('request')->query->get('page', 1),
            10,
            array('pageParameterName' => 'page')
        );

        return $this->render('BusetaBusesBundle:Autobus:index.html.twig', array(
            'entities' => $entities,
            'busqueda' => $busqueda->createView(),
        ));
    }

    /**
     * Creates a new Autobus entity.
     *
     */
    public function createAction(Request $request)
    {
        //echo '<pre>';
        //print_r($request->files);exit;

        $entityModel = new AutobusModel();
        $form = $this->createCreateForm($entityModel);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $model = $this->get('handlebuses');

            $em = $this->getDoctrine()->getManager();
            $entity = $model->HandleAutobusNew($em,$entityModel);

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

        $archivo_adjunto = $this->createForm(new ArchivoAdjuntoType());

        //$entity->addArchivoAdjunto(new FileModel());

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
                $childrens[$modelo->getId()] = $modelo->getValor();
            }

            $json[$m->getId()] = array(
                'name' => $m->getValor(),
                'childrens' => $childrens,
            );
        }

        return $this->render('BusetaBusesBundle:Autobus:new.html.twig', array(
            'entity'          => $entity,
            'form'            => $form->createView(),
            'json'            => json_encode($json),
            'archivo_adjunto' => $archivo_adjunto->createView(),
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
        $handler = $this->get('handlebuses');

        $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $editForm = $this->createEditForm($handler->fillDataAutobusModel($entity));
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
    private function createEditForm(AutobusModel $model)
    {
        $form = $this->createForm(new AutobusType(), $model, array(
            'action' => $this->generateUrl('autobus_update', array('id' => $model->getId())),
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
        $handler = $this->get('handlebuses');

        $entity = $em->getRepository('BusetaBusesBundle:Autobus')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Autobus entity.');
        }

        $autobusmodel = $handler->fillDataAutobusModel($entity);

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($autobusmodel);
        $editForm->submit($request);

        if ($editForm->isValid()) {

            //Aqui llamo el Handle con entity y model
            $entity = $handler->HandleAutobusEdit($autobusmodel, $entity);
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

            try {
                $em->remove($entity);
                $em->flush();

                $this->get('session')->getFlashBag()->add('success', 'Ha sido eliminado satisfactoriamente.');
            } catch (\Exception $e) {
                $this->get('logger')->addCritical(
                    sprintf('Ha ocurrido un error eliminando un Autobús. Detalles: %s',
                        $e->getMessage()
                    ));
            }
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
