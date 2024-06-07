<?php

/**
 * @package App\Service\Math
 * @category Service
 */
namespace App\Service\Math;

/**
 * @access public
 * @author Yander
 * @version 1.0
 * @since 1.0
 */
class AdditionService
{
    /**
     * @access public
     * @param float $a
     * @param float $b
     * @return float
     * @since 1.0
     */
    public function add(float $a, float $b):float
    {
        return $a + $b;
    }
}