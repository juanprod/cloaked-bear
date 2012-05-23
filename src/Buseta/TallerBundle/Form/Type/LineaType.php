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
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('tipo', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('cantidad_pedido', 'integer', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('monto', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('producto','entity',array(
                    'class' => 'BusetaBodegaBundle:Producto',
                    'empty_value' => '---Seleccione un producto---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('impuesto','entity',array(
                    'class' => 'BusetaTallerBundle:Impuesto',
                    'empty_value' => '---Seleccione un impuesto---',
                    'required' => false,
                    'attr' => array(
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
