<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Degustation;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class SousMenuDegustationType extends AbstractType
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
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'descriptionFr',
                CKEditorType::class,
                [
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
                    'required' => false,
                    'attr' => [
                        'class' => 'form-textarea',
                        ]
                ]
            )
            ->add(
                'titreEn',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'descriptionEn',
                CKEditorType::class,
                [
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
                    'required' => false,
                    'attr' => [
                        'class' => 'form-textarea',
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
                'couleurArrierePlan',
                ChoiceType::class,
                [
                    'choices' => [
                        'Noir' => 'noir',
                        'Blanc' => 'blanc'
                    ],
                    'multiple' => false,
                    'expanded' => true
                ]
            )
            ->add(
                'idDegustation',
                EntityType::class,
                [
                    'required' => true,
                    'class' => Degustation::class,
                    'choice_label' => 'titreFr',
                    'expanded' => false,
                    'multiple' => false,
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                    'label' => 'Submit',
                    'attr' => [
                        'class' => 'form-submit',
                        ]
                ]
            );
    }
}
