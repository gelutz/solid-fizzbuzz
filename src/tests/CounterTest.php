<?php

namespace FizzBuzz\Tests;

use FizzBuzz\Domain\Counter;
use FizzBuzz\Domain\ModRule;
use PHPUnit\Framework\TestCase;



final class CounterTest extends TestCase {

    private $counter;

    protected function setUp(): void {
        $ruleChain = new ModRule(3, "Fizz", 
                new ModRule(5, "Buzz", 
            new ModRule(15, "FizzBuzz", null)
        ));

        $this->counter = new Counter($ruleChain);
        $this->counter->reset();
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

        $this->assertEquals($counted[15], "FizzBuzz");
        $this->assertEquals($counted[45], "FizzBuzz");
        $this->assertEquals($counted[90], "FizzBuzz");
    }
}