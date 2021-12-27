<?php

function isDivision(int $divisible, int $divisor): bool
{
    return ($divisible % $divisor) === 0 && intdiv($divisible, $divisor) ?: false;
}

function fizzBuzz(int $begin, int $end)
{
    if ($begin > $end) {
        return ' ';
    }

    $qq = $begin;
    while ($qq <= $end) {
        $resFizz = isDivision($qq, 3);
        $resBuzz = isDivision($qq, 5);
        $resFizzBuzz = ($resFizz && $resBuzz);

        if ($resFizz && $resBuzz) {
            print_r('FizzBuzz ');
        } elseif ($resFizz && !$resBuzz) {
            print_r('Fizz ');
        } elseif ($resBuzz && !$resFizz) {
            print_r('Buzz ');
        } elseif (!$resFizz && !$resBuzz && !$resFizzBuzz) {
            print_r($qq . ' ');
        }
        $qq++;
    }
    return null;
}

fizzBuzz(11, 20);
