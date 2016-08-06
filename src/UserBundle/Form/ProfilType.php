<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProfilType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Nom',
                )
            ))
            ->add('prenom', TextType::class, array(
                'attr' => array(
                    'placeholder' => 'Prénom',
                )
            ))
            ->add('dateNaissance', DateTimeType::class, array(
                'widget' => 'single_text',
                'input' => 'datetime',
                'format' => 'y-MM-dd',
                'attr' => array(
                    'placeholder' => 'Date de naissance',
                    'class' => 'datepicker',
                )
            ))
            ->add('newsletter', CheckboxType::class, array(
                'required' => false
            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\Profil'
        ));
    }
}
