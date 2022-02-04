<?php

namespace PHPCourse\ex3;

class Fibonachi
{
    public function fib(int $n): int
    {
        if ($n < 0) {
            return 'invalid input value';
        }
        if ($n === 0) {
            return 0;
        }
        if ($n === 1) {
            return 1;
        }
        return $this->fib($n - 2) + $this->fib($n - 1);
    }
}
