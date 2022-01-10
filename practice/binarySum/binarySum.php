<?php

function binarySum(string $addend1, string $addend2): string
{
    $pattern = '/^[0-1]+$/';

    if (!preg_match($pattern, $addend1)) {
        return 'entered value is incorrect: summand';
    }

    if (!preg_match($pattern, $addend2)) {
        return 'entered value is incorrect: addend';
    }

    $sumDec = bindec($addend1) + bindec($addend2);
    return decbin($sumDec);
}

$a = '1101';
$b = '101';

print_r("$a + $b = " . binarySum($a, $b) . PHP_EOL);
