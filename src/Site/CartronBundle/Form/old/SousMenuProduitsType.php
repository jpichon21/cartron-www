<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SousMenuProduitsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFr')
            ->add('titreEn')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\SousMenuProduits'
        ));
    }

    public function getName()
    {
        return 'site_cartronbundle_sousmenuproduitstype';
    }
}
