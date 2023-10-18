<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RegexNumeroValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // Check if the value matches the specified regex pattern
        if (!preg_match($constraint->pattern, $value)) {
            $this->context->buildViolation($constraint->regexMessage)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}
?>
