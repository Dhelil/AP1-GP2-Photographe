<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\IsTrue;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'E-Mail'
                ],
                'label' => false
            ])
            ->add('nom_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom'
                ],
                'label' => false
            ])
            ->add('prenom_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prénom'
                ],
                'label' => false
            ])
            ->add('adresse_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Adresse'
                ],
                'label' => false
            ])
            ->add('cp_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Code Postal'
                ],
                'label' => false
            ])
            ->add('ville_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ville'
                ],
                'label' => false
            ])
            ->add('genre_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Genre'
                ],
                'label' => false
            ])
            ->add('telephone_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de téléphone'
                ],
                'label' => false
            ])
            ->add('RGPDConsent', CheckboxType::class, [
                'mapped' => false,
                'constraints' => [
                    new IsTrue([
                        'message' => 'You should agree to our terms.',
                    ]),
                ],
                'label' => 'En m\'inscrivant, j\'accepte les conditions d\'utilisateurs'
            ])
            ->add('plainPassword', PasswordType::class, [
                // instead of being set onto the object directly,
                // this is read and encoded in the controller
                'mapped' => false,
                'attr' => [
                    'autocomplete' => 'new-password',
                    'class' => 'form-control',
                    'placeholder' => 'Mot de passe'
                ],
                'constraints' => [
                    new NotBlank([
                        'message' => 'Please enter a password',
                    ]),
                    new Length([
                        'min' => 6,
                        'minMessage' => 'Your password should be at least {{ limit }} characters',
                        // max length allowed by Symfony for security reasons
                        'max' => 4096,
                    ]),
                ],
                'label' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}