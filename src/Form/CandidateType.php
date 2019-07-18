<?php

namespace App\Form;

use App\Entity\Candidate;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CandidateType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('gender', ChoiceType::class, [
                'choices'  => [
                    'Male'      =>  'male',
                    'Female'    =>  'female',
                ],
            ])
            ->add('firstName')
            ->add('lastName')
            ->add('adress')
            ->add('country')
            ->add('nationality')
            ->add('passport', FileType::class, [
                'data_class'    =>  null,
                'mapped'        =>  false,
                'required'      =>  false,
            ])
            ->add('curriculum', FileType::class, [
                'data_class'    =>  null,
                'mapped'        =>  false,
                'required'      =>  false,
            ])
            ->add('picture', FileType::class, [
                'data_class'    =>  null,
                'mapped'        =>  false,
                'required'      =>  false,
            ])
            ->add('availability')
            ->add('birthDate', DateType::class)
            ->add('birthLocation')
            ->add('experience', ChoiceType::class, [
                'choices'  => [
                    '0 - 6 months'      =>  '0 - 6 months',
                    '6 months - 1 year' =>  '6 months - 1 year',
                    '1 - 2 years'       =>  '1 - 2 years',
                    '2 - 5 years'       =>  '2 - 5 years',
                    '5 - 10 years'      =>  '5 - 10 years',
                    '10+ years'         =>  '10+ years',
                ],
            ])
            ->add('description')
            ->add('notes')
            ->add('files')
            ->add('user', EntityType::class, [
                'class'         =>  User::class,
                'choice_label'  =>  'username',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class'            =>  Candidate::class,
        ]);
    }
}
