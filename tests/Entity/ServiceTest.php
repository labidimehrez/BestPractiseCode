<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Service;
use Mockery;

//use Psr\Log\LoggerInterface;

/**
 * Description of ServiceTest
 *
 * @author mehrez
 */
class ServiceTest extends TestCase
{
   public function tearDown()
    {
        Mockery::close();
    }
    public function testIndex()
    {
       
    }
}