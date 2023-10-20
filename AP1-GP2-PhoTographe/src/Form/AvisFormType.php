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
            ->add('descriptionAvis', null, ['label' => false, 'attr' => ['placeholder' => 'Votre avis...', 'rows' => '5',]])
            ->add('niveauAvis', null, ['label' => false, 'attr' => ['placeholder' => 'Votre note...', 'color[type="text"]: black']])
            ->add('dateAvis', DateType::class, ['data' => new \DateTime(), 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'label' => false, 'attr' => ['style' => 'display: none;'],])
            ->add('idAvisUser', EntityType::class, ['class' => User::class, 'choice_label' => 'nomUser', 'multiple' => false, 'expanded' => false, 'label' => false, 'attr' => ['style' => 'display: none;'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Avis::class,
        ]);
    }
}
