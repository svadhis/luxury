<?php

namespace App\Form;

use App\Entity\Offer;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use App\Entity\Category;
use App\Entity\Contact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Doctrine\ORM\EntityRepository;

class OfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('description')
            ->add('status')
            ->add('notes')
            ->add('type', ChoiceType::class, [
                'choices'  => [
                    'Full time'     =>  'fulltime',
                    'Part time'     =>  'part time',
                    'Temporary'     =>  'temporary',
                    'Freelance'     =>  'freelance',
                    'Seasonal'      =>  'seasonal',
                ],
            ])
            ->add('location')
            ->add('dateClosing', DateType::class)
            ->add('salary')
            ->add('contact', EntityType::class, [
                'class'         =>  Contact::class,
                'choice_label' => function ($contact) {
                    return $contact->getClient()->getName() . ' - ' . $contact->getName();
                }
            ])
            ->add('category', EntityType::class, [
                'class'         =>  Category::class,
                'choice_label'  =>  'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Offer::class,
        ]);
    }
}
