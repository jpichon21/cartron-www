<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ProduitsType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('titreFr', 'text', array('required' => true))
                ->add('descriptionFr')
                ->add('titreEn', 'text', array('required' => true))
                ->add('descriptionEn')
                ->add('ficheProduitFr', 'file', array('required' => false, 'data_class' => null))
                ->add('ficheProduitEn', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotJpgFr', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotJpgEn', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotPdfEn', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotPdfFr', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotEpsFr', 'file', array('required' => false, 'data_class' => null))
                ->add('packshotEpsEn', 'file', array('required' => false, 'data_class' => null))
                ->add('ficheLogistiqueFr', 'file', array('required' => false, 'data_class' => null))
                ->add('ficheLogistiqueEn', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles1En', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles1Fr', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles2Fr', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles2En', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles3En', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles3Fr', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles4En', 'file', array('required' => false, 'data_class' => null))
                ->add('medailles4Fr', 'file', array('required' => false, 'data_class' => null))
                ->add('recetteFr', 'file', array('required' => false, 'data_class' => null))
                ->add('recetteEn', 'file', array('required' => false, 'data_class' => null))
                ->add('image', 'file', array('required' => false, 'data_class' => null))
                ->add('idDegustation', 'entity', array(
                    'class' => 'Site\CartronBundle\Entity\DegustationPro',
                    'property' => 'titreFr',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => true
                ))
                ->add('idSousMenu', 'entity', array(
                    'class' => 'Site\CartronBundle\Entity\SousMenuProduits',
                    'property' => 'titreFr',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => true
                ))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver) {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\Produits'
        ));
    }

    public function getName() {
        return 'site_cartronbundle_produitstype';
    }

}
