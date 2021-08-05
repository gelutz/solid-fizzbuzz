<?php

require_once 'infra/Rule.php';

class Counter {

    private $rules;
    private $position;

    public function __construct() {
        $this->position = 0;
    }

    function count() {
        $message = "";

        foreach ($this->rules as $rule) {
            $message = !empty($message) ?? $rule->change($this->position);
        }

        ++$this->position;
        return $message;
    }

    function addRule(Rule $rule): void {
        $this->rules[] = $rule;
    }

    function reset() {
        $this->position = 0;
    }
}