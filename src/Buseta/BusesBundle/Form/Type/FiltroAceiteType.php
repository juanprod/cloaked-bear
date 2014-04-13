<?php

namespace Buseta\BusesBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class FiltroAceiteType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
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
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        /*$resolver->setDefaults(array(
            'data_class' => 'Buseta\BusesBundle\Entity\FiltroAceite'
        ));*/
        $resolver->setDefaults(array(
                'data_class' => 'Buseta\BusesBundle\Entity\FiltroAceite'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_databundle_filtro_aceite';
    }
}
