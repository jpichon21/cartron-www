<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class LoginAdminType extends AbstractType
{
    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'username',
                EmailType::class,
                [
                    'label' => false,
                    'required' => true,
                    'attr' => [
                        'class' => 'login-inp',
                        ]
                ]
            )
            ->add(
                'password',
                PasswordType::class,
                [
                    'label' => false,
                    'required' => true,
                    'attr' => [
                        'class' => 'login-inp',
                        ]
                ]
            )
            ->add(
                'submit',
                SubmitType::class,
                [
                    'label' => 'Submit',
                    'attr' => [
                        'class' => 'submit-login',
                        ]
                ]
            );
    }
}
