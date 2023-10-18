<?php

namespace App\Form;

use App\Entity\Avis;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AvisFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('descriptionAvis')
            ->add('niveauAvis')
            ->add('dateAvis', DateType::class, ['data' => new \DateTime(), 'widget' => 'single_text', 'format' => 'yyyy-MM-dd',])
            ->add('idAvisUser', EntityType::class, ['class' => User::class, 'choice_label' => 'nomUser', 'multiple' => false, 'expanded' => false,])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
