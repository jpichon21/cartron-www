<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class HomePageType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titleFr', 'text', array('required' => true))
                ->add('descFr', 'textarea', array('required' => true, 'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'advanced',
                        'style' => 'width: 600px;'
                    ),))
                ->add('titreEn', 'text', array('required' => true))
                ->add('descEn', 'textarea', array('required' => true, 'attr' => array(
                        'class' => 'tinymce',
                        'data-theme' => 'advanced',
                        'style' => 'width: 600px;'
                    ),))
                ->add('image', 'file', array('required' => false, 'data_class' => null));
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\HomePage'
        ));
    }

    public function getName() {
        return 'site_cartronbundle_homepagetype';
    }

}
