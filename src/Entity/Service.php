<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Entity;
use Psr\Log\LoggerInterface;
/**
 * Description of Service
 *
 * @author mehrez
 */
class Service
{
    private $logger;

    /**
     * Service constructor.
     * @param LoggerInterface $logger
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
    public function writeLog()
    {
        $this->logger->info('I just got the logger');
    }
}