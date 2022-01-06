<?php

function isPerfect(int $a): bool
{
    $dividers = 0;
    for ($i = 1; $i < $a; $i++) {
        if ($a % $i == 0) {
            $dividers += $i;
        }
    }
    return $dividers == $a;
}

var_dump(isPerfect(28));
