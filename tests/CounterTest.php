<?php 

use PHPUnit\Framework\TestCase;


final class CounterTest extends TestCase {

    public function makeCounter() {
        $rule3 = new ModRule(3, "Fizz");
        $rule5 = new ModRule(5, "Buzz");

        $counter = new Counter();
        $counter->addRule($rule3);
        $counter->addRule($rule5);

        return $counter;
    }

    public function multiplesOfThreeShouldBeFizz() : void {
        $counter = $this->makeCounter();

        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $counter->count();
        }

        $this->assertEquals($counted[9],  "Fizz");
        $this->assertEquals($counted[39], "Fizz");
        $this->assertEquals($counted[69], "Fizz");
        $this->assertEquals($counted[99], "Fizz");
    }

    public function multiplesOfFiveShouldBeBuzz() : void {
        $counter = $this->makeCounter();

        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $counter->count();
        }

        $this->assertEquals($counted[5],  "Buzz");
        $this->assertEquals($counted[35], "Buzz");
        $this->assertEquals($counted[55], "Buzz");
        $this->assertEquals($counted[95], "Buzz");
    }

    public function multiplesOfFiftheenShouldBeFizzBuzz() : void {
        $counter = $this->makeCounter();

        $counted = [];
        for ($i=0; $i < 100; $i++) { 
            $counted[] = $counter->count();
        }

        $this->assertEquals($counted[15],  "Buzz");
        $this->assertEquals($counted[45], "Buzz");
        $this->assertEquals($counted[90], "Buzz");
    }
}