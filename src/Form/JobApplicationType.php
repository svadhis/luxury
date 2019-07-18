<?php

namespace App\Form;

use App\Entity\JobApplication;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use App\Entity\Candidate;
use App\Entity\Offer;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class JobApplicationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder

            ->add('candidate', EntityType::class, [
                'class'         =>  Candidate::class,
                'choice_label' => function ($candidate) {
                    return $candidate->getFirstName() . ' ' . $candidate->getLastName();
                }
            ])
            ->add('offer', EntityType::class, [
                'class'         =>  Offer::class,
                'choice_label' => function ($offer) {
                    return $offer->getReference() . ' - ' . $offer->getTitle();
                }
            ])
            ->add('status')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => JobApplication::class,
        ]);
    }
}
