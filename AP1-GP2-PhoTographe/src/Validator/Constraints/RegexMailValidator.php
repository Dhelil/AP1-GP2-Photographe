<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RegexMailValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // Check if the value matches the specified regex pattern
        if (!preg_match($constraint->pattern, $value)) {
            $this->context->buildViolation($constraint->regexMessage)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }

        // Check the password match if specified
        if ($constraint->matchField) {
            $field = $constraint->matchField;
            $matchValue = $this->context->getRoot()->get($field)->getData();
       
            if ($value !== $matchValue) {
                $this->context->buildViolation($constraint->matchMessage)
                    ->addViolation();
            }
        }
    }
}
?>
