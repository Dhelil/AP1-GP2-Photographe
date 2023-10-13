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
use Symfony\Component\Validator\Constraints\Regex;


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
                'constraints' => [
                    // Regex du mail
                    //new Regex('^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(fr|com|net)$/',
                    //"Veuillez entrer une adresse e-mail valide. L'adresse e-mail doit suivre le format standard, comprenant une partie locale de texte suivie d'un '@', puis une partie de domaine de texte, et se terminer par l'une des extensions de domaine autorisées (.fr, .com, .net).")
                ],
                'label' => false
            ])

            ->add('nom_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Nom'
                ],
                'constraints' => [
                    // Regex du nom
                    //new Regex('^[A-Z][a-zA-Z]*$/',
                    //"Veuillez entrer un prénom valide. Le prénom doit commencer par une majuscule et ne peut contenir que des caractères alphabétiques (lettres).")
                    ],
                'label' => false
            ])

            ->add('prenom_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Prénom'
                ],
                'constraints' => [
                    // Regex du prenom
                    //new Regex('^[A-Z][a-zA-Z]*$/',
                    //"Veuillez entrer un prénom valide. Le prénom doit commencer par une majuscule et ne peut contenir que des caractères alphabétiques (lettres).")
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
                'constraints' => [
                    // Regex du CP
                    //new Regex('^(0[1-9]|[1-8][0-9]|9[0-5])\d{3}$/',
                    //"Veuillez entrer un code postal valide en France. Les codes postaux en France sont composés de 5 chiffres et ne commencent pas par 96 ou 97.")
                ],
                'label' => false
            ])

            ->add('ville_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Ville'
                ],
                'constraints' => [
                    // Regex de la ville
                    //new Regex('^[A-Z][a-zA-Z]*$/',
                    //"Le nom de la ville doit commencer par une majuscule et ne peut contenir que des caractères alphabétiques (lettres)")
                ],
                'label' => false
            ])

            ->add('genre_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Genre'
                ],
                'constraints' => [
                    // Regex du genre
                    //new Regex('/^[a-zA-Z]+$)/', 
                    //"Veuillez entrer un genre valide. Le genre doit contenir uniquement des caractères alphabétiques (lettres).")
                ],
                'label' => false
            ])

            ->add('telephone_user', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de téléphone'
                ],
                'constraints' => [
                    new Length([

                        // taille min et max du num de tel
                        'min' => 10,
                        'max' => 10,
                    ]),

                    // Regex du num de tel
                    //new Regex('/^(01|06|07)\d{8}$)/', 
                    //"Veuillez entrer un numéro de téléphone valide. Le numéro de téléphone doit commencer par '01', '06' ou '07' et doit comporter exactement 10 chiffres.")
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
                    // MDP doit pas être vide
                    new NotBlank([
                        'message' => 'Veuillez entrez un mot de passe',
                    ]),

                    // Taille MDP
                    new Length([
                        'min' => 12,
                        'max' => 4096,
                    ]),
                   // Regex MDP
                    new Regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+=!])(?=.{12,}$)/', 
                    "Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre, un caractère spécial et avoir une longueur minimale de 8 caractères.")
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
