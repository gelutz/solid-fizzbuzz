<?php

// Criando as regras para o replacer

use FizzBuzz\Domain\Counter;
use FizzBuzz\Domain\ModRule;

$ruleChain = new ModRule(3, "Fizz", 
        new ModRule(5, "Buzz", null
));

$counter = new Counter($ruleChain);

for ($i=0; $i < 10; $i++) { 
    echo $counter->count() . PHP_EOL;
}

?>