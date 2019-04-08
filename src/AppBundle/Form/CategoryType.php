<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Category;

class CategoryType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'nom',
                TextType::class,
                [
                    'label' => false,
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'description',
                TextareaType::class,
                [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'class' => 'form-textarea',
                        ]
                ]
            )
            ->add(
                'parent',
                EntityType::class,
                [
                    'required' => false,
                    'class' => Category::class,
                    'choice_label' => 'nom',
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
