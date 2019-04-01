<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class PageMenuType extends AbstractType
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
                        'data-theme' => 'advanced',
                        'style' => 'width: 600px;'
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
                        'data-theme' => 'advanced',
                        'style' => 'width: 600px;'
                        ]
                ]
            )
            ->add(
                'ficheFr',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'ficheEn',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'labelFr',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'labelEn',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
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
