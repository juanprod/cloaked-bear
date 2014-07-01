<?php

namespace Buseta\BodegaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProductoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('codigo', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('nombre', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('uom','entity',array(
                    'class' => 'BusetaNomencladorBundle:UOM',
                    'empty_value' => '---Seleccione una UOM---',
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('categoria','entity',array(
                    'class' => 'BusetaNomencladorBundle:Categoria',
                    'empty_value' => '---Seleccione una categoría---',
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('bodega','entity',array(
                'class' => 'BusetaBodegaBundle:Bodega',
                'required' => false,
                'empty_value' => '---Seleccione una bodega---',
                'attr' => array(
                    'class' => 'form-control',
                )
            ))
            ->add('precio_costo', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('precio_salida', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('activo', null, array(
                    'required' => false,
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\BodegaBundle\Entity\Producto'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_bodegabundle_producto';
    }
}
