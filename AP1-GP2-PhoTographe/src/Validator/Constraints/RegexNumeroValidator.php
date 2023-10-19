<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RegexNumeroValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // Check if the value matches the specified regex pattern
        if (!preg_match('/^(01|06|07)\d{8}$/', $value)) {

            // Si la valeur ne correspond pas, une violation de contrainte est générée
            $this->context->buildViolation($constraint->message)
                ->addViolation();
                
}
}
}
?>
