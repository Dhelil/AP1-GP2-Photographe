<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class RegexCPConstraint extends Constraint
{
    public $regexMessage = 'Veuillez entrer un code postal français valide. 
    Les codes postaux français standard commencent par un chiffre de 01 à 95, suivi de trois chiffres supplémentaires.';

    public $pattern = '/^(0[1-9]|[1-8][0-9]|9[0-5])\d{3}$/';

    public $matchField; // Utilisé pour spécifier le champ de correspondance si nécessaire

    public function validatedBy()
    {
        return RegexCPValidator::class;
    }
}
