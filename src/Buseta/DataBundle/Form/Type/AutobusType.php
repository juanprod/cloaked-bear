<?php

namespace Buseta\DataBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AutobusType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('matricula')
            ->add('numero_chasis')
            ->add('numero_motor')
            ->add('peso_tara')
            ->add('peso_bruto')
            ->add('numero_plazas')
            ->add('numero_cilindros')
            ->add('cilindrada')
            ->add('potencia')
            ->add('valido_hasta')
            ->add('fecha_rtv')
            ->add('marca')
            ->add('modelo')
            ->add('estilo')
            ->add('grupos')
            ->add('color')
            ->add('marca_motor')
            ->add('combustible')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Buseta\DataBundle\Form\Model\Autobus'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_databundle_autobus';
    }
}
