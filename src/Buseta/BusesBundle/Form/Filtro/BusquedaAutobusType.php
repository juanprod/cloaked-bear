<?php

namespace Buseta\BusesBundle\Form\Filtro;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class BusquedaAutobusType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricula','text',array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

            ->add('estilo','entity',array(
                    'class' => 'BusetaNomencladorBundle:Estilo',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

            ->add('color','entity',array(
                    'class' => 'BusetaNomencladorBundle:Color',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

            ->add('marca','entity',array(
                    'class' => 'BusetaNomencladorBundle:Marca',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

            ->add('combustible','entity',array(
                    'class' => 'BusetaNomencladorBundle:Combustible',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

            ->add('marca_motor','entity',array(
                    'class' => 'BusetaNomencladorBundle:MarcaMotor',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))

        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
                'csrf_protection' => false,
            ));
    }

    public function getName()
    {
        return 'data_busqueda_autobus_type';
    }
}