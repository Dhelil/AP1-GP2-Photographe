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
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use App\Validator\Constraints\RegexPasswordConstraint;
use App\Validator\Constraints\RegexMailConstraint;
use App\Validator\Constraints\RegexNumeroConstraint;
use App\Validator\Constraints\RegexCPConstraint;




class RegistrationFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // Chaque 'add' correspond au colonnes de l'entité User
            ->add('email', EmailType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'E-Mail',
                    'error_bubbling' => true, // Désactive l'affichage automatique des erreurs

                ],
                'constraints' => [
                    new RegexMailConstraint(),
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

            ->add('cpUser', TextType::class, [
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Code Postal',
                    'class' => 'register-cp-input',
                    'error_bubbling' => true, // Désactive l'affichage automatique des erreurs

                ],
                'constraints' => [
                    new RegexCPConstraint(),
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
                'error_bubbling' => false, // Désactive l'affichage automatique des erreurs
                'attr' => [
                    'class' => 'form-control',
                    'placeholder' => 'Numéro de téléphone',
                ],
                'constraints' => [
                    new RegexNumeroConstraint(),
                    // Regex du numéro de téléphone
                    // ...
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

            ->add('plainPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'options' => [ 'attr' => ['class' => 'password-field']],
                'required' => true,
                'error_bubbling' => false, // Désactive l'affichage automatique des erreurs
                'first_options' => ['label' => false, 
                                    'attr' => ['placeholder' => 'Mot de passe',
                                                'class' => 'register-password-input',
                                                'autocomplete' => 'new-password'],
                                    'label_attr' => ['class' => 'register-label'],
                                    'error_bubbling' => true,
                                    ],
                                    
                'second_options' => ['label' => false, 
                                     'attr' => ['placeholder' => "Confirmation mot de passe"]],
                'constraints' => [
                    new RegexPasswordConstraint(),
                ],
                'mapped' => false,
            ])     

        ;
    }

    // Pour voir les données de l'entité User
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}

