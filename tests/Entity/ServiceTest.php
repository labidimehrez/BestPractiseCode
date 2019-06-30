<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\Entity;
use PHPUnit\Framework\TestCase;
use Psr\Log\LoggerInterface;
use App\Entity\Service;

/**
 * Description of Service
 *
 * @author mehrez
 */
class ServiceTest  extends TestCase
{
    private $logger;

    public function init()
    {
        return new Service($this->logger->reveal());
    }
    public function setUp()
    {
        parent::setUp();
        $this->logger = $this->prophesize(LoggerInterface::class);
    }
    public function testWriteLog()
    {
        $service = $this->init();
        $service->writeLog();
        $log = $service->writeLog();

        $this->assertTrue($log->has('Message with a value'));
    }
}