<?php

namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class RegexPasswordValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        // si le MDP fournit correspond bien à la regex
        if (!preg_match($constraint->pattern, $value)) {
            $this->context->buildViolation($constraint->regexMessage)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }

        // Check la valeur minimum du MDP
        if (strlen($value) < $constraint->minLength) {
            $this->context->buildViolation($constraint->minLengthMessage)
                ->setParameter('{{ minLength }}', $constraint->minLength)
                ->addViolation();
        }

        // Check si les MDP correspondent
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
