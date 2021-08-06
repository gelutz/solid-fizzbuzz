<?php

namespace FizzBuzz\Domain;

use FizzBuzz\Infra\Rule;

class Counter
{
    private $rules;
    private $position;

    public function __construct()
    {
        $this->position = 0;
    }

    public function count()
    {
        $message = "";

        foreach ($this->rules as $rule) {
            $message = !empty($message) ?? $rule->change($this->position);
        }

        ++$this->position;
        return $message;
    }

    public function addRule(Rule $rule): void
    {
        $this->rules[] = $rule;
    }

    public function reset()
    {
        $this->position = 0;
    }
}
