# S.O.L.I.D. FizzBuzz

Solid FizzBuzz is a reimagined version of the classic FizzBuzz problem, implemented using SOLID principles. The unique aspect of this project is the use of a single `if` statement in the main part of the script, while allowing flexibility for adding custom rules.

> I tried to build this project following the S.O.L.I.D. rules, and apllied two design patterns: [Strategy](https://refactoring.guru/design-patterns/strategy) and [Chain of responsability](https://refactoring.guru/design-patterns/chain-of-responsibility)

## Features

- **SOLID Principles**: Adheres to SOLID principles for clean and maintainable code.
- **Custom Rules**: Easily add custom rules to modify the FizzBuzz behavior.
- **Minimalistic Design**: Uses only one `if` statement in the main script.

## Getting Started

### Prerequisites

- Python (version 3.6 or higher)

### Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/gelutz/solid-fizzbuzz.git
    cd solid-fizzbuzz
    ```

### Usage

1. Open the main script file and add any rules you like. The default rules are for numbers 3, 5, and 15, which compose FizzBuzz.
2. Run the script:
    ```sh
    python main.py
    ```
    The script will count from 0 to 100, applying the defined rules.

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any improvements or fixes.

## License

This project is currently not licensed. Please contact the repository owner for more information.

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
