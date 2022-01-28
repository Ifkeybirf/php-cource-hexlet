<?php

function isDivision(int $divisible, int $divisor): bool
{
    return ($divisible % $divisor) === 0 && ($divisible > $divisor);
}

function fizzBuzz(int $begin, int $end)
{
    $qq = $begin;
    while ($qq <= $end) {
        $resFizz = isDivision($qq, 3);
        $resBuzz = isDivision($qq, 5);
        $resFizzBuzz = ($resFizz && $resBuzz);

        if ($resFizz && $resBuzz) {
            print_r('FizzBuzz ');
        } elseif ($resFizz) {
            print_r('Fizz ');
        } elseif ($resBuzz) {
            print_r('Buzz ');
        } else {
            print_r($qq . ' ');
        }
        $qq++;
    }
}

fizzBuzz(11, 20);
