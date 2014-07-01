<?php

namespace Buseta\BodegaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MovimientoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('producto','entity',array(
                'class' => 'BusetaBodegaBundle:Producto',
                'empty_value' => '---Seleccione un producto---',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('movidoA','entity',array(
                'class' => 'BusetaBodegaBundle:Bodega',
                'empty_value' => '---Seleccione una bodega---',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('descripcion', 'textarea', array(
                'required' => false,
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
            ->add('cantidadProductos', 'text', array(
                'required' => true,
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\BodegaBundle\Entity\Movimiento'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_bodegabundle_movimiento';
    }
}
