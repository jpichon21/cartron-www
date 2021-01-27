<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use AppBundle\Entity\Collection;

class SousMenuType extends AbstractType
{
    
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'titreFr',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'descriptionFr',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'noteDegustationFr',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'elaborationFr',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'contenanceFr',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'conserverFr',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'degre',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'image',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'icone',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'titreEn',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'descriptionEn',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'noteDegustationEn',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'elaborationEn',
                CKEditorType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'form-textarea',
                    ]
                ]
            )
            ->add(
                'contenanceEn',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'conserverEn',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'recetteFr',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'recetteEn',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'urlShop',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'class' => 'inp-form'
                    ]
                ]
            )
            ->add(
                'idCollection',
                EntityType::class,
                [
                'class' => Collection::class,
                'attr' => [
                    'class' => 'styledselect_form_1'
                ],
                'expanded' => false,
                'multiple' => false,
                'required' => true,
                'choice_label' => 'titreFr',
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                'label' => 'submit',
                'attr' => [
                    'class' => 'form-submit',
                    ]
                ]
            );
    }
}
