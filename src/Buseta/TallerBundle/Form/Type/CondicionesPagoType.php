<?php

namespace Buseta\TallerBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CondicionesPagoType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre', 'text', array(
                'required' => false,
                'label'  => 'Nombre',
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
            ->add('meses_plazo', 'integer', array(
                'required' => true,
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
            ->add('dias_plazo', 'integer', array(
                'required' => true,
                'attr'   => array(
                    'class' => 'form-control',
                )
            ))
            ->add('nota', 'textarea', array(
                'required' => false,
                'label'  => 'Nota',
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
            'data_class' => 'Buseta\TallerBundle\Entity\CondicionesPago'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_tallerbundle_condicionespago';
    }
}
