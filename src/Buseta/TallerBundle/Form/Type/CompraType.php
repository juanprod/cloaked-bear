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
            ->add('tipo', 'text', array(
                    'required' => true,
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
            ->add('forma_pago', 'text', array(
                    'required' => true,
                    'label'  => 'Forma de pago',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('moneda', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('condiciones_pago', 'text', array(
                    'required' => true,
                    'label'  => 'Condiciones de pago',
                    'attr'   => array(
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
            ->add('estado', 'text', array(
                    'required' => true,
                    'label'  => 'Estado',
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
