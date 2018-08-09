<?php

namespace Site\CartronBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class VideoHpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('videoFr','file',array('required' => false,'data_class' => null))
            ->add('titreFr','text',array('required' => true))
            ->add('videoEn','file',array('required' => false,'data_class' => null))
            ->add('titreEn','text',array('required' => true))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Site\CartronBundle\Entity\VideoHp'
        ));
    }

    public function getName()
    {
        return 'site_cartronbundle_videohptype';
    }
}
