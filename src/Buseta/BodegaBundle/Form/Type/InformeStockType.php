<?php

namespace Buseta\BodegaBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class InformeStockType extends AbstractType
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
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                    )
                ))
            ->add('categoria','entity',array(
                'class' => 'BusetaNomencladorBundle:Categoria',
                'empty_value' => '---Seleccione una categoría---',
                'label' => 'Categoría',
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
                'data_class' => 'Buseta\BodegaBundle\Form\Model\InformeStockModel',
                'method' => 'POST',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_informestock_autobus';
    }
}
