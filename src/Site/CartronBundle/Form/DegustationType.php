<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DegustationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
           ->add('titreFr','text',array('required' => true))
            ->add('titreEn','text',array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\Degustation'
        ));
    }

    public function getName()
    {
        return 'site_cartronbundle_degustationtype';
    }
}
