<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace App\Entity;
/**
 * Description of Calculator
 * @author mehrez
 */
use InvalidArgumentException;

class Calculator {

    public function add($a, $b) {
        return $a + $b;
    }

    public function divide($a, $b) {
        if(!$b) {
            throw new InvalidArgumentException();
        }
        return $a / $b;
    }
}
