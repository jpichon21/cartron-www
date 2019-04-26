<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use AppBundle\Entity\Category;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CategoryType extends AbstractType
{
    /**
     * @var array
     */
    private $options;

    /**
     * @SuppressWarnings(PHPMD.UnusedFormalParameter)
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->options = $options;
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
                    'query_builder' => function (EntityRepository $er) {
                        return $er->createQueryBuilder('u')
                            ->where('u.lvl = 0 AND u.id != '.$this->options['category']);
                    },
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
        $resolver->setDefaults(['category' => null]);
    }
}
