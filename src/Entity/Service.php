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

use Psr\Log\LoggerInterface;

/**
 * Service class
 *
 * The class holding the root Service class definition
 *
 * @category Service
 * @package  Service
 * @author   Lorna Jane Mitchell <lorna@ibuildings.com>
 * @license  http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link     http://example.com/calculator
 */
class Service
{
    /**
     * Get the sum
     *
     * This function is to write log
     *
     * @param LoggerInterface $logger this is injection
     *
     * @return this
     */
    public function index(LoggerInterface $logger)
    {
        $logger->info('I just got the logger');
    }
}
