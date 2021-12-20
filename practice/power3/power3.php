<?php

function isPowerOfThree(int $inDigit): bool
{
    $res = false;
    $divider = 3;
    $divided = $inDigit;

    $a = $inDigit / $divider;
    $b = intdiv($inDigit, $divider);

    while (($b > 1) && ($a === $b)) {
        $divider *= 3;
        $a = $inDigit / $divider;
        $b = intdiv($inDigit, $divider);
//      print_r('divider: ' . $divider ."\n");
    }
    if (($a === $b) && $a = 1) {
        return true;
    } else return false;
}
//  print intdiv(34,3) ."\n"; //1

var_dump(isPowerOfThree(4)); //false
var_dump(isPowerOfThree(9)); //true
var_dump(isPowerOfThree(219)); //false

var_dump(isPowerOfThree(80)); //false
var_dump(isPowerOfThree(243)); //false
