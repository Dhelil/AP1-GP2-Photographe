<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RegexPasswordConstraint extends Constraint
{
    public $regexMessage = 'Le mot de passe doit contenir au moins une lettre minuscule, une lettre majuscule, un chiffre, un caractère spécial.';

    public $pattern = '/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%^&+=!])(?=.{12,}$)/';

    public $minLengthMessage = 'Le mot de passe doit contenir au moins {{ minLength }} caractères.';

    public $minLength = 12;

    public $matchField; // Utilisé pour spécifier le champ de correspondance si nécessaire

    public $matchMessage = 'Les mots de passe ne correspondent pas'; // Message personnalisé pour la correspondance des mots de passe

    public function validatedBy()
    {
        return RegexPasswordValidator::class;
    }
}
