<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RegexMailConstraint extends Constraint
{
    public $regexMessage = 'Veuillez entrer une adresse e-mail valide. 
    L\'adresse e-mail doit suivre le format standard, comprenant une partie locale de texte suivie 
    d\'un \'@\', puis une partie de domaine de texte, et se terminer par l\'une des extensions de domaine 
    autorisées (.fr, .com, .net).';

    public $pattern = '/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(fr|com|net)$/';

    public $matchField; // Utilisé pour spécifier le champ de correspondance si nécessaire

    public function validatedBy()
    {
        return RegexMailValidator::class;
    }
}
