<?php

namespace Buseta\BusesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AutobusType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('imagen_frontal', 'file', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_lateral_d', 'file', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_lateral_i', 'file', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_trasera', 'file', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('matricula', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('marca_cajacambio', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('tipo_cajacambio', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitecajacambios','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteCajaCambios',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitehidraulico','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteHidraulico',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitemotor','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteMotor',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitetransmision','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteTransmision',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('cartel_capacidadlitros', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('bateria_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('bateria_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('filtro_aceite_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_aceite_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_aceite_3', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_diesel_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_diesel_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_diesel_3', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_diesel_4', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_hidraulico_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_hidraulico_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_caja_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_caja_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_transmision', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_agua_1', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('filtro_agua_2', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 150px',
                    )
                ))
            ->add('numero_chasis', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('numero_motor', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('capacidad_tanque', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('valor_unidad', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('numero_unidad', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('anno', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('peso_tara', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('peso_bruto', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('numero_plazas', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('numero_cilindros', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('cilindrada', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('potencia', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('valido_hasta','date',array(
                    'widget' => 'single_text',
                    'format'  => 'dd/MM/yyyy',
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('fecha_rtv_1','date',array(
                    'widget' => 'single_text',
                    'format'  => 'dd/MM/yyyy',
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('fecha_rtv_2','date',array(
                    'widget' => 'single_text',
                    'format'  => 'dd/MM/yyyy',
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('fecha_ingreso','date',array(
                    'widget' => 'single_text',
                    'format'  => 'dd/MM/yyyy',
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('marca','entity',array(
                    'class' => 'BusetaNomencladorBundle:Marca',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('modelo','entity',array(
                    'class' => 'BusetaNomencladorBundle:Modelo',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('estilo','entity',array(
                    'class' => 'BusetaNomencladorBundle:Estilo',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('color','entity',array(
                    'class' => 'BusetaNomencladorBundle:Color',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('marca_motor','entity',array(
                    'class' => 'BusetaNomencladorBundle:MarcaMotor',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('combustible','entity',array(
                    'class' => 'BusetaNomencladorBundle:Combustible',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('rampas', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('barras', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('camaras', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('lector_cedulas', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('publicidad', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('gps', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('wifi', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        /*$resolver->setDefaults(array(
            'data_class' => 'Buseta\BusesBundle\Form\Model\Autobus'
        ));*/
        $resolver->setDefaults(array(
                'data_class' => 'Buseta\BusesBundle\Form\Model\AutobusModel'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_databundle_autobus';
    }
}
