<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Service;
//use Psr\Log\LoggerInterface;

/**
 * Description of ServiceTest
 *
 * @author mehrez
 */
class ServiceTest extends TestCase
{
    public function init()
    {
        return new Service();
    }
    public function testIndex()
    {
       
    }
}