<?php

/**
 * @package App\Validator\Constraints
 * @category Validator
 */
namespace App\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

use function PHPUnit\Framework\isFalse;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see ConstraintValidator
 */
class NotExampleEmailValidator extends ConstraintValidator
{

    /**
     * @access public
     * @param mixed $value
     * @param Constraint $constraint
     * @return void
     * @since 1.0
     * @see ConstraintValidator::validate()
     */
    #[\Override] public function validate(mixed $value, Constraint $constraint): void
    {
        if (null === $value || '' === $value) {
            return;
        }
        elseif (strpos($value, '@example.com') !== false) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}