<?php

namespace PHPCourse\ex3;

class Fibonachi
{
    public function fib(int $n)
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

        $myFibObj = new \PHPCourse\ex3\Fibonachi();
        return $myFibObj->fib($n - 2) + $myFibObj->fib($n - 1);
    }
}
