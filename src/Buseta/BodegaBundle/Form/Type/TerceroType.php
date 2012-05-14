<?php

namespace Buseta\BodegaBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class TerceroType extends AbstractType
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
                        'style' => 'width: 300px',
                    )
                ))
            ->add('nombres', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 300px',
                    )
                ))
            ->add('apellidos', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 300px',
                    )
                ))
            ->add('alias', 'text', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('cliente', null, array(
                    'required' => false,
                ))
            ->add('institucion', null, array(
                    'required' => false,
                ))
            ->add('proveedor', null, array(
                    'required' => false,
                ))
            ->add('activo', null, array(
                    'required' => false,
                ))
            ->add('direccion','entity',array(
                    'class' => 'BusetaBodegaBundle:Direccion',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 300px',
                    )
                ))
            ->add('mecanismoscontacto','collection',array(
                    'type' => new MecanismoContactoType(),
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                ))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\BodegaBundle\Entity\Tercero'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_bodegabundle_tercero';
    }
}
