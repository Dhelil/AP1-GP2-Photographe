<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RegexNumeroConstraint extends Constraint
{
    public $message = 'Veuillez entrer un numéro de téléphone valide. Le numéro de téléphone doit commencer 
    par \'01\', \'06\' ou \'07\' et doit comporter exactement 10 chiffres.';

    public function validatedBy()
    {
        return RegexNumeroValidator::class;
    }
}
