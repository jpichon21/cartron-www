<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;

class HomePageType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'titleFr',
                TextType::class,
                [
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'descFr',
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
                'descEn',
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
                'image',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
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
