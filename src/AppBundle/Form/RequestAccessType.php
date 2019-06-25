<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Translation\TranslatorInterface as Translator;

class RequestAccessType extends AbstractType
{
    public $translator;


    public function __construct(Translator $translator)
    {
        $this->translator = $translator;
    }

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
                    'placeholder' => $this->translator->trans('Nom'),
                    'class' => 'input',
                    ]
                ]
            )
            ->add(
                'prenom',
                TextType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => $this->translator->trans('Prénom'),
                    'class' => 'input',
                    ]
                ]
            )
            ->add(
                'email',
                EmailType::class,
                [
                'label' => false,
                'required' => true,
                'attr' => [
                    'placeholder' => $this->translator->trans('Email'),
                    'class' => 'input',
                    ]
                ]
            )
            ->add(
                'societe',
                TextType::class,
                [
                'label' => false,
                'required' => false,
                'attr' => [
                    'placeholder' => $this->translator->trans('Société'),
                    'class' => 'input',
                    ]
                ]
            )
            ->add(
                'agent',
                CheckboxType::class,
                [
                    'label'    => 'Agent',
                    'required' => false,
                ]
            )
            ->add(
                'importateur',
                CheckboxType::class,
                [
                    'label'    => 'Importateur',
                    'required' => false,
                ]
            )
            ->add(
                'professionnel',
                CheckboxType::class,
                [
                    'label'    => 'Professionnel',
                    'required' => false,
                ]
            )
            ->add(
                'message',
                TextAreaType::class,
                [
                    'label' => false,
                    'required' => true,
                    'attr' => [
                        'placeholder' => $this->translator->trans('Message'),
                        ]
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                'label' => $this->translator->trans('VALIDER'),
                'attr' => [
                    'class' => 'submit',
                    ]
                ]
            );
    }
}
