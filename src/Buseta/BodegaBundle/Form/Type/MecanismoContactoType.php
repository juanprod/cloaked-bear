<?php

namespace Buseta\BodegaBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MecanismoContactoType extends AbstractType{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('tipocontacto','entity',array(
                    'class' => 'BusetaNomencladorBundle:TipoContacto',
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('valor','text',array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\BodegaBundle\Entity\MecanismoContacto',
            'csrf_protection' => false,
        ));
    }

    public function getName()
    {
        return 'data_mecanismo_contacto_type';
    }
}