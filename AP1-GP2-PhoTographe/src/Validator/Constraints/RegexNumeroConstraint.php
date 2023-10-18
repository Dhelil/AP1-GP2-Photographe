<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RegexNumeroConstraint extends Constraint
{
    public $regexMessage = 'Veuillez entrer un numéro de téléphone valide. Le numéro de téléphone doit commencer 
    par \'01\', \'06\' ou \'07\' et doit comporter exactement 10 chiffres.';

    public $pattern = '/^(01|06|07)\d{8}$/';

    public function validatedBy()
    {
        return RegexNumeroValidator::class;
    }
}
