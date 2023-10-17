<?php

namespace App\Form;

use App\Entity\DemandeContact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('descriptionDemande')
            ->add('objetDemande')
            ->add('dateDemande')
            ->add('enfant')
            ->add('idDemandeUser')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => DemandeContact::class,
        ]);
    }
}
