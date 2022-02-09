<?php

namespace PHPCourse\ex3;

class Fibonachi
{
    private static $instance;

    private function __construct()
    {
        // empty private construct function, so nobody will be able to call it directly
    }

    public static function getInstance(): Fibonachi
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function fib(int $n): int
    {
        if ($n < 0) {
            throw new \InvalidArgumentException('input digit must be >= 0');
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
