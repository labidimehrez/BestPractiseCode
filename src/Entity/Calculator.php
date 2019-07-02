<?php

/**
 * Parses and verifies the doc comments for files.
 *
 * PHP version 7
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Mehrez LABIDI <mehrez.labidi@gmail.com>
 * @copyright 2006-2014 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

namespace App\Entity;

use InvalidArgumentException;

/**
 * Calculator class
 *
 * The class holding the root Calculator class definition
 *
 * @category Calculator
 * @package  Calculator
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/calculator
 */
class Calculator
{
    /**
     * Get the sum
     *
     * This function add two var if possible  
     * and returns th result if possible
     * 
     * @param float $a this is the first param
     * @param float $b this is the second param
     * 
     * @return float
     */
    public function add($a, $b)
    {
        return $a + $b;
    }
    /**
     * Get the divide
     *
     * This function divide two var if possible or throw exception
     * and returns th result if possible
     * 
     * @param float $a this is the first param
     * @param float $b this is the second param
     * 
     * @return float
     */
    public function divide($a, $b)
    {
        if (!$b) {
            throw new InvalidArgumentException();
        }
        return $a / $b;
    }
}