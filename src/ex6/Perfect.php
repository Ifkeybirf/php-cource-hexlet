<?php

namespace PHPCourse\ex6;

class Perfect
{
    public function isPerfect(int $a): bool
    {
        if ($a === 0) {
            return false;
        }
        $dividers = 0;
        for ($i = 1; $i < $a; $i++) {
            if ($a % $i === 0) {
                $dividers += $i;
            }
        }
        return $dividers === $a;
    }
}
