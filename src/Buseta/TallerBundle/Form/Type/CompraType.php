<?php

namespace Buseta\TallerBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompraType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('numero', 'text', array(
                    'required' => true,
                    'label'  => 'Número',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('tipo','entity',array(
                'class' => 'BusetaNomencladorBundle:TipoCompra',
                'empty_value' => '---Seleccione tipo de compra---',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('orden_prioridad', 'choice', array(
                'required' => true,
                'translation_domain'=> 'BusetaTallerBundle',
                'empty_value' => '---Seleccione prioridad---',
                'choices' => array(
                    'High'=>'prioridad.High',
                    'Medium' => 'prioridad.Medium',
                    'Low' => 'prioridad.Low',
                ),
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
            ->add('descripcion', 'textarea', array(
                    'required' => false,
                    'label'  => 'Descripción',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('fecha_pedido','date',array(
                'widget' => 'single_text',
                'format'  => 'dd/MM/yyyy',
                'attr'   => array(
                    'class' => 'form-control',
                    'style' => 'width: 250px',
                )
            ))
            ->add('forma_pago', 'choice', array(
                'required' => true,
                'empty_value' => '---Seleccione forma de pago---',
                'translation_domain'=> 'BusetaTallerBundle',
                'choices' => array(
                    '1'=>'forma_pago.1',
                    '2' => 'forma_pago.2',
                    '3' => 'forma_pago.3',
                    '4' => 'forma_pago.4',
                    '5' => 'forma_pago.5',
                    'B' => 'forma_pago.B',
                    'C' => 'forma_pago.C',
                    'K' => 'forma_pago.K',
                    'P' => 'forma_pago.P',
                    'R' => 'forma_pago.R',
                    'T' => 'forma_pago.T',
                    'W' => 'forma_pago.W',
                ),
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
            ->add('moneda','entity',array(
                'class' => 'BusetaNomencladorBundle:Moneda',
                'empty_value' => '---Seleccione tipo de moneda---',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('condiciones_pago','entity',array(
                'class' => 'BusetaTallerBundle:CondicionesPago',
                'empty_value' => '---Seleccione condiciones de pago---',
                'required' => false,
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('importe_libre_impuesto', 'text', array(
                    'required' => true,
                    'read_only' => true,
                    'label'  => 'Importe libre de impuesto',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('importe_con_impuesto', 'text', array(
                    'required' => true,
                    'read_only' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('importe_general', 'text', array(
                    'required' => true,
                    'read_only' => true,
                    'label'  => 'Importe general',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('estado', 'choice', array(
                    'required' => true,
                    'empty_value' => '---Seleccione estado---',
                    'translation_domain'=> 'BusetaTallerBundle',
                    'choices' => array(
                        '??'=>'estado.??',
                        'AP' => 'estado.AP',
                        'CH' => 'estado.CH',
                        'CL' => 'estado.CL',
                        'CO' => 'estado.CO',
                        'DR' => 'estado.DR',
                        'IN' => 'estado.IN',
                        'IP' => 'estado.IP',
                        'NA' => 'estado.NA',
                        'PE' => 'estado.PE',
                        'PO' => 'estado.PO',
                        'PR' => 'estado.PR',
                        'RE' => 'estado.RE',
                        'TE' => 'estado.TE',
                        'TR' => 'estado.TR',
                        'VO' => 'estado.VO',
                        'WP' => 'estado.WP',
                        'XX' => 'estado.XX',
                    ),
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('tercero','entity',array(
                    'class' => 'BusetaBodegaBundle:Tercero',
                    'query_builder' => function(EntityRepository $er){
                            return $er->createQueryBuilder('t')
                                ->where('t.proveedor = true');
                        },
                    'empty_value' => '---Seleccione un proveedor---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('lineas','collection',array(
                'type' => new LineaType(),
                'label'  => false,
                'required' => false,
                'by_reference' => false,
                'allow_add' => true,
                'allow_delete' => true,
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\TallerBundle\Entity\Compra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_tallerbundle_compra';
    }
}
