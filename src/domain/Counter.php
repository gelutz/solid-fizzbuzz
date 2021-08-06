<?php

namespace FizzBuzz\Domain;

use FizzBuzz\Infra\Rule;

class Counter
{
    private $ruleChain;
    private $position;

    public function __construct(Rule $ruleChain)
    {
        $this->position  = 0;
        $this->ruleChain = $ruleChain;

    }

    public function count()
    {
        $message = $this->ruleChain->replace($this->position);
        ++$this->position;

        return $message;
    }

    public function reset()
    {
        $this->position = 0;
    }
}
