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
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_lateral_d', 'file', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_lateral_i', 'file', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('imagen_trasera', 'file', array(
                    'required' => false,
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
                    'empty_value' => '---Seleccione aceite caja cambios---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitehidraulico','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteHidraulico',
                    'empty_value' => '---Seleccione aceite hidráulico---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitemotor','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteMotor',
                    'empty_value' => '---Seleccione aceite motor---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('aceitetransmision','entity',array(
                    'class' => 'BusetaNomencladorBundle:AceiteTransmision',
                    'empty_value' => '---Seleccione aceite transmisión---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('carter_capacidadlitros', 'text', array(
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
            ->add('filtro_aceite', new FiltroAceiteType())

            ->add('filtro_diesel', new FiltroDieselType())

            ->add('filtro_hidraulico', new FiltroHidraulicoType())

            ->add('filtro_caja', new FiltroCajaType())

            ->add('filtro_transmision', new FiltroTransmisionType())

            ->add('filtro_agua', new FiltroAguaType())

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
            ->add('capacidad_tanque', 'integer', array(
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
            ->add('anno', 'integer', array(
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
            ->add('fecha_rtv_1', 'choice', array(
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    ),
                    'empty_value' => '---Seleccione un año---',
                    'choices' => array('Enero'=>'Enero',
                                       'Febrero' => 'Febrero',
                                       'Marzo' => 'Marzo',
                                       'Abril' => 'Abril',
                                       'Mayo' => 'Mayo',
                                       'Junio' => 'Junio',
                                       'Julio' => 'Julio',
                                       'Agosto' => 'Agosto',
                                       'Septiembre' => 'Septiembre',
                                       'Octubre' => 'Octubre',
                                       'Noviembre' => 'Noviembre',
                                       'Diciembre' => 'Diciembre'
                    )
                    ))
            ->add('fecha_rtv_2', 'choice', array(
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    ),
                    'empty_value' => '---Seleccione un año---',
                    'choices' => array('Enero'=>'Enero',
                                       'Febrero' => 'Febrero',
                                       'Marzo' => 'Marzo',
                                       'Abril' => 'Abril',
                                       'Mayo' => 'Mayo',
                                       'Junio' => 'Junio',
                                       'Julio' => 'Julio',
                                       'Agosto' => 'Agosto',
                                       'Septiembre' => 'Septiembre',
                                       'Octubre' => 'Octubre',
                                       'Noviembre' => 'Noviembre',
                                       'Diciembre' => 'Diciembre'
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
                    'empty_value' => '---Seleccione una marca---',
                    'attr' => array(
                        'class' => 'form-control',
                        'empty_value' => '---Seleccione una marca---',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('modelo','entity',array(
                    'class' => 'BusetaNomencladorBundle:Modelo',
                    'empty_value' => '---Seleccione un modelo---',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('estilo','entity',array(
                    'class' => 'BusetaNomencladorBundle:Estilo',
                    'empty_value' => '---Seleccione un estilo---',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('color','entity',array(
                    'class' => 'BusetaNomencladorBundle:Color',
                    'empty_value' => '---Seleccione un color---',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('marca_motor','entity',array(
                    'class' => 'BusetaNomencladorBundle:MarcaMotor',
                    'empty_value' => '---Seleccione marca de motor---',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('combustible','entity',array(
                    'class' => 'BusetaNomencladorBundle:Combustible',
                    'empty_value' => '---Seleccione un combustible---',
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
            /*->add('archivo_adjunto','collection',array(
                    'type' => 'file',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                ))*/
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
                'data_class' => 'Buseta\BusesBundle\Form\Model\AutobusModel',
                'method' => 'POST',
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
