<?php

namespace FizzBuzz\Infra;

interface Rule
{
    public function replace(int $value): string;
}
