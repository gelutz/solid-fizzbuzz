<?php

namespace FizzBuzz\Domain;

use FizzBuzz\Infra\Rule;

class ModRule implements Rule
{
    protected $number;
    protected $message;

    public function __construct(int $number, string $message)
    {
        $this->number 	= $number;
        $this->message 	= $message;
    }
    
    public function change(int $value) : string
    {
        return ($value % $this->number === 0) ? $this->message : $value;
    }
}
