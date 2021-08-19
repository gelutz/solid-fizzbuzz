# S.O.L.I.D. FizzBuzz
A refactored version of FizzBuzz, only containing one `if` statement.

> I tried to build this project following the S.O.L.I.D. rules, and apllied two design patterns: [Strategy](https://refactoring.guru/design-patterns/strategy) and [Chain of responsability](https://refactoring.guru/design-patterns/chain-of-responsibility)


### Installing:
```bash
cd solid-fizzbuzz
docker-compose up
# This command spins a PHP container and runs all tests, outputting the results to the terminal. 

# you can also run locally:
cd solid-fizzbuzz
composer install
composer run test
```

### Usage example:
```php
$ruleChain = new ModRule(3, "Fizz", 
        new ModRule(5, "Buzz", 
    new ModRule(15, "FizzBuzz", null) 
)); # Chain of responsabilities

$counter = new Counter($ruleChain); # Strategy

for ($j=0; $j < 100; $j++) { 
    echo $counter->count() . PHP_EOL;
}
```
-----------
Author: [gelutz](https://github.com/gelutz)