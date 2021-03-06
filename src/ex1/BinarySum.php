<?php

namespace PHPCourse\ex1;

class BinarySum
{
    public function binarySum(string $addend1, string $addend2): string
    {
        $pattern = '/^[0-1]+$/';

        if (!preg_match($pattern, $addend1)) {
            throw new \InvalidArgumentException('addend1 should contain only 0 and 1');
        }
        if (!preg_match($pattern, $addend2)) {
            throw new \InvalidArgumentException('addend2 should contain only 0 and 1');
        }

        return decbin(bindec($addend1) + bindec($addend2));
    }
}
