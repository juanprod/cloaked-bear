<?php

namespace Buseta\TallerBundle\Form\Type;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CompraType extends AbstractType
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
            ->add('descripcion', 'textarea', array(
                    'required' => false,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 900px',
                    )
                ))
            ->add('fecha_pedido','date',array(
                    'widget' => 'single_text',
                    'format'  => 'dd/MM/yyyy',
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('forma_pago', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('moneda', 'money', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('condiciones_pago', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('importe_libre_impuesto', 'money', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('importe_con_impuesto', 'money', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('importe_general', 'money', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('estado', 'text', array(
                    'required' => true,
                    'attr'   => array(
                        'class' => 'form-control',
                        'style' => 'width: 250px',
                    )
                ))
            ->add('tercero','entity',array(
                    'class' => 'BusetaBodegaBundle:Tercero',
                    'query_builder' => function(EntityRepository $er){
                            return $er->createQueryBuilder('t')
                                ->where('t.proveedor = true');
                        },
                    'empty_value' => '---Seleccione un proveedor---',
                    'required' => false,
                    'attr' => array(
                        'class' => 'form-control',
                        'style' => 'width: 575px',
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
            'data_class' => 'Buseta\TallerBundle\Entity\Compra'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'buseta_tallerbundle_compra';
    }
}
