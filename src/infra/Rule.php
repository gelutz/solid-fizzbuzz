<?php

namespace FizzBuzz\Infra;

interface Rule
{
    public function change(int $value): string;
}
