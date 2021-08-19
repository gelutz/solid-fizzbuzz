<?php

namespace FizzBuzz\Domain;

use FizzBuzz\Infra\Rule;

class ModRule implements Rule
{
    protected $number;
    protected $message;
    protected $nextRule;
    public function __construct(int $number, string $message, Rule $nextRule = null)
    {
        $this->number 	= $number;
        $this->message 	= $message;
        $this->nextRule = $nextRule;
    }
    
    public function replace(int $value) : string
    {
        $message = (string) $value;
        if (isset($this->nextRule)) {
            $message = $this->nextRule->replace($value);
        }
        
        if ($message === (string) $value AND 
            $value !== 0 AND 
            $value % $this->number === 0)
        {
            $message = $this->message;
        }

        return $message;
    }
}
