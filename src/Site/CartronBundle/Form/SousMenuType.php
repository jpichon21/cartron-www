<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class SousMenuType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titreFr', 'text', array('required' => true))
                ->add('descriptionFr', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('noteDegustationFr', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('elaborationFr', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('contenanceFr', 'text', array('required' => true))
                ->add('conserverFr', 'text', array('required' => true))
                ->add('degre', 'text', array('required' => true))
                ->add('image', 'file', array('required' => false, 'data_class' => null))
                ->add('icone', 'file', array('required' => false, 'data_class' => null))
                ->add('titreEn', 'text', array('required' => true))
                ->add('descriptionEn', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('noteDegustationEn', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('elaborationEn', 'textarea', array('required' => true, 'attr' => array('class' => 'tinymce', 'tinymce' => '{"theme":"simple"}')))
                ->add('contenanceEn', 'text', array('required' => true))
                ->add('conserverEn', 'text', array('required' => true))
                ->add('recetteFr', 'text', array('required' => true))
                ->add('recetteEn', 'text', array('required' => true))
                ->add('idCollection', 'entity', array(
                    'label' => 'Collection',
                    'class' => 'Site\CartronBundle\Entity\Collection',
                    'property' => 'titreFr',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => true
        ));
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\SousMenu'
        ));
    }

    public function getName() {
        return 'site_cartronbundle_sousmenutype';
    }

}
