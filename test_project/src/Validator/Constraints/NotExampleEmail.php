<?php

/**
 * @package App\Validator\Constraints
 * @category Validator
 */
namespace App\Validator\Constraints;


use Symfony\Component\Validator\Constraint;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 * @see Constraint
 */
#[\Attribute] class NotExampleEmail extends Constraint
{
    /**
     * @access public
     * @var string
     */
    public $message = 'El correo "{{ value }}" no puede pertenecer al dominio example.com.';
}