<?php

class Counter {

    public int $start;
    public int $end; 
    public $replacer;

    public function __construct(int $start, int $end, Replacer $replacer = null) {
        $this->start = $start;
        $this->end = $end;
        $this->replacer = $replacer;
    }

    public function fullCount() {
        $allValues = [];
        $current =  $this->start;
        
        for ($current; $current <= $this->end; $current++){

            $value = $this->replacer->replace($current);
            $allValues[$current] = $value;

        }
        
        return $allValues;
    }
}