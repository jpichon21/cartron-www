<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SousMenuDegustationType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titreFr', 'text', array('required' => true))
                ->add('descriptionFr', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('noteDegustationFr', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('titreEn', 'text', array('required' => true))
                ->add('descriptionEn', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('noteDegustationEn', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('image', 'file', array('required' => false, 'data_class' => null))
                ->add('couleurArrierePlan', 'choice', array(
                    'choices' => array(
                        'noir' => 'Noir',
                        'blanc' => 'Blanc'
                    ),
                    'multiple' => false,
                    'expanded' => true
                ))
                ->add('idDegustation', 'entity', array(
                    'class' => 'Site\CartronBundle\Entity\Degustation',
                    'property' => 'titreFr',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => true
        ));
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\SousMenuDegustation'
        ));
    }

    public function getName() {
        return 'site_cartronbundle_sousmenudegustationtype';
    }

}
