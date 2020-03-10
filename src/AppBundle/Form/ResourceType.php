<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Category;
use AppBundle\Entity\Resource;

class ResourceType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'title',
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
                    'required' => true,
                    'attr' => [
                        'class' => 'form-textarea',
                        ]
                ]
            )
            /*->add(
                'titleSEO',
                TextType::class,
                [
                    'label' => false,
                    'required' => true,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )*/
            ->add(
                'picture',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'miniature',
                FileType::class,
                [
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'category',
                EntityType::class,
                [
                    'required' => true,
                    'class' => Category::class,
                    'choice_label' => 'nom',
                    'expanded' => false,
                    'multiple' => false,
                ]
            )
            ->add(
                'downloads',
                CollectionType::class,
                [
                    'required' => false,
                    'entry_type'   => DownloadType::class,
                    'allow_add'    => true,
                    'allow_delete' => true,
                    'by_reference' => false,
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
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Resource::class,
        ]);
    }
}
