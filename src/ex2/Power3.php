<?php

namespace PHPCourse\ex2;
class Power3
{
    public function isPowerOfThree(int $inDigit): bool
    {
        $divider = 3;
        $a = $inDigit / $divider;
        $b = intdiv($inDigit, $divider);

        while (($b > 1) && ($a === $b)) {
            $divider *= 3;
            $a = $inDigit / $divider;
            $b = intdiv($inDigit, $divider);
        }
        return ($a === $b && $a = 1);
    }
}
