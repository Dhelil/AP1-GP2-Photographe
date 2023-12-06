<?php

namespace App\Form;

use App\Entity\Contact;
use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LeContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('objet')
            ->add('date', dateType::class, ['data' => new \DateTime(), 'widget' => 'single_text', 'format' => 'yyyy-MM-dd', 'label' => false, 'attr' => ['style' => 'display: none;'],])
            ->add('user', EntityType::class, ['class' => User::class, 'choice_label' => 'nomUser', 'multiple' => false, 'expanded' => false, 'label' => false, 'attr' => ['style' => 'display: none;'],])
            ->add('description')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
