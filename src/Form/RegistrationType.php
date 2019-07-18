<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email', EmailType::class, [
                'required'  =>  true,
                'attr'      =>  [
                    'class'     =>  'validate',
                ]
            ])
            ->add('username', TextType::class , [
                'required'  =>  true,
                'attr'      =>  [
                    'class'     =>  'validate',
                ]
            ])
            ->add('password', PasswordType::class, [
                'required'  =>  true,
                'attr'      =>  [
                    'class'     =>  'validate',
                ]
            ])
            ->add('confirm_password', PasswordType::class, [
                'required'  =>  true,
                'attr'      =>  [
                    'class'     =>  'validate',
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
