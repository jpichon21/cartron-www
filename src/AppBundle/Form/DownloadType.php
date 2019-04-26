<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use AppBundle\Entity\Download;

class DownloadType extends AbstractType
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
                    'required' => false,
                    'attr' => [
                        'class' => 'inp-form',
                        ]
                ]
            )
            ->add(
                'file',
                FileType::class,
                [
                    'label' => false,
                    'required' => false,
                    'data_class' => null
                ]
            )
            ->add(
                'locale',
                TextType::class,
                [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'class' => 'hidden',
                        ]
                ]
            );
    }
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Download::class,
        ]);
    }
}
