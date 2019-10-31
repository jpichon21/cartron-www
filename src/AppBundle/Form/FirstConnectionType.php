<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Pays;

class FirstConnectionType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'dateNaissance',
                DateType::class,
                [
                    'years' => range(1920, date('Y')),
                    'label' => 'Date de naissance',
                    'format' => 'ddMMyyyy',
                    'widget' => 'choice',
                    'required' => true
                ]
            )
            ->add(
                'pays',
                EntityType::class,
                [
                    'label' => 'Pays',
                    'class' => Pays::class,
                    'placeholder' => 'Sélectionnez votre pays',
                    'choice_label' => 'pays',
                    'expanded' => false,
                    'multiple' => false,
                    'required' => false,
                ]
            )
            ->add(
                'sesouvenir',
                CheckboxType::class,
                [
                    'label' => 'Se souvenir',
                    'required' => false,
                ]
            );
    }

    public function getBlockPrefix()
    {
        return 'form';
    }
}
