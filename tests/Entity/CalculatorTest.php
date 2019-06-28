<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Calculator;

/**
 * Description of CalculatorTest
 *
 * @author mehrez
 */
class CalculatorTest extends TestCase {

    public function testAdd() {
        
        $faker = \Faker\Factory::create();
        $a = $faker->numberBetween($min = 1000, $max = 9000);
        $b = $faker->numberBetween($min = 1000, $max = 9000);
        
        $calculator = new Calculator();
        $result = $calculator->add($a, $b);

        // assert that your calculator added the numbers correctly!
        $this->assertEquals((int) $a + (int) $b, $result);
    }

}
