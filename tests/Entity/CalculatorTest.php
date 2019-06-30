<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace test\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Calculator;
use InvalidArgumentException;
use Exception;

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

    public function testDivideSuccess() {
        $faker = \Faker\Factory::create();
        $a = $faker->numberBetween($min = 1000, $max = 9000);
        $b = $faker->numberBetween($min = 1000, $max = 9000);

        $calculator = new Calculator();
        $result = $calculator->divide($a, $b);

        // assert that your calculator divided the numbers correctly!
        $this->assertEquals((float) $a / (float) $b, $result);
    }

    public function testDivideFail() {
        $faker = \Faker\Factory::create();
        $a = $faker->numberBetween($min = 1000, $max = 9000);
        $b = 0;
        $calculator = new Calculator();
        try {
            $calculator->divide($a, $b);
        } catch (Exception $e) {
            
        }
        $this->assertInstanceOf(InvalidArgumentException::class, $e);
    }

}
