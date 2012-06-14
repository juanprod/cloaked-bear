<?php

namespace Buseta\TallerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LineaType extends AbstractType
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
            ->add('cantidad_pedido', 'integer', array(
                    'required' => true,
                   'label'  => 'Cantidad de pedido',
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('monto', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('producto','entity',array(
                    'class' => 'BusetaBodegaBundle:Producto',
                    'empty_value' => '---Seleccione un producto---',
                    'required' => true,
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('impuesto','entity',array(
                    'class' => 'BusetaTallerBundle:Impuesto',
                    'empty_value' => '---Seleccione un impuesto---',
                    'required' => true,
                    'attr' => array(
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
            'data_class' => 'Buseta\TallerBundle\Entity\Linea'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_tallerbundle_linea';
    }
}
