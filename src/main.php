<?php

// Criando as regras para o replacer

require 'domain/Counter.php';
require 'domain/ModRule.php';

$rule3 = new ModRule(3, "Fizz");
$rule5 = new ModRule(5, "Buzz");

$counter = new Counter();
$counter->addRule($rule3);
$counter->addRule($rule5);

for ($i=0; $i < 10; $i++) { 
    echo $counter->count() . PHP_EOL;
}

?>