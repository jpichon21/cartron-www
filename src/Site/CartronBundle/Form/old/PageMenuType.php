<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PageMenuType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titreFr')
            ->add('descriptionFr')
            ->add('ficheFr', 'file', array('required' => false, 'data_class' => null))
            ->add('titreEn')
            ->add('descriptionEn')
            ->add('ficheEn', 'file', array('required' => false, 'data_class' => null))
            ->add('labelFr')
            ->add('lebleEn')
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\PageMenu'
        ));
    }

    public function getName()
    {
        return 'site_cartronbundle_pagemenutype';
    }
}
