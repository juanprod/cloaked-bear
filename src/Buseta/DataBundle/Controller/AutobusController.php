<?php

namespace Buseta\DataBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Buseta\DataBundle\Form\Model\Autobus;
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

        $em = $this->getDoctrine()->getManager();

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
        $entity->setModelo($marca);

        $estilo = $em->getRepository('BusetaNomencladorBundle:Estilo')->find($autobus['estilo']);
        $entity->setModelo($estilo);

        $color = $em->getRepository('BusetaNomencladorBundle:Color')->find($autobus['color']);
        $entity->setModelo($color);

        $marcamotor = $em->getRepository('BusetaNomencladorBundle:MarcaMotor')->find($autobus['marca_motor']);
        $entity->setModelo($marcamotor);

        $combustible = $em->getRepository('BusetaNomencladorBundle:Combustible')->find($autobus['combustible']);
        $entity->setModelo($combustible);

        $em->persist($entity);
        $em->flush();

        return $this->redirect($this->generateUrl('autobus_show', array('id' => $entity->getId())));

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

        $marcas = $em->getRepository('BusetaNomencladorBundle:Marca')->findAll();
        $modelos = $em->getRepository('BusetaNomencladorBundle:Modelo')->findAll();
        $estilos = $em->getRepository('BusetaNomencladorBundle:Estilo')->findAll();
        $colores = $em->getRepository('BusetaNomencladorBundle:Color')->findAll();

        return $this->render('DataBundle:Autobus:new.html.twig', array(
            'entity' => $entity,
            'marcas' => $marcas,
            'modelos' => $modelos,
            'estilos' => $estilos,
            'colores' => $colores,
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
