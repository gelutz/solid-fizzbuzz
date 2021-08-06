<?php

namespace FizzBuzz\Tests;

use FizzBuzz\Domain\Counter;
use FizzBuzz\Domain\ModRule;
use PHPUnit\Framework\TestCase;



final class CounterTest extends TestCase {

    private $counter;

    protected function setUp(): void {
        $rule3 = new ModRule(3, "Fizz");
        $rule5 = new ModRule(5, "Buzz");

        $this->counter = new Counter();
        $this->counter->addRule($rule3);
        $this->counter->addRule($rule5);
    }

    public function testMultiplesOfThreeShouldBeFizz() : void {
        

        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $this->counter->count();
        }

        $this->assertEquals($counted[9],  "Fizz");
        $this->assertEquals($counted[39], "Fizz");
        $this->assertEquals($counted[69], "Fizz");
        $this->assertEquals($counted[99], "Fizz");
    }

    public function testMultiplesOfFiveShouldBeBuzz() : void {
        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $this->counter->count();
        }

        $this->assertEquals($counted[5],  "Buzz");
        $this->assertEquals($counted[35], "Buzz");
        $this->assertEquals($counted[55], "Buzz");
        $this->assertEquals($counted[95], "Buzz");
    }

    public function testMultiplesOfFiftheenShouldBeFizzBuzz() : void {
        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $this->counter->count();
        }

        $this->assertEquals($counted[15],  "Buzz");
        $this->assertEquals($counted[45], "Buzz");
        $this->assertEquals($counted[90], "Buzz");
    }
}