<?php

namespace PHPCourse\ex8;

class FizzBuzz
{
    public function fizzBuzz(int $begin, int $end): string
    {
        $result = '';
        $qq = $begin;
        while ($qq <= $end) {
            $resFizz = FizzBuzz::isDivision($qq, 3);
            $resBuzz = FizzBuzz::isDivision($qq, 5);
            $resFizzBuzz = ($resFizz && $resBuzz);

            if ($resFizz && $resBuzz) {
                $result .= 'FizzBuzz ';
            } elseif ($resFizz) {
                $result .= 'Fizz ';
            } elseif ($resBuzz) {
                $result .= 'Buzz ';
            } else {
                $result .= $qq . ' ';
            }
            $qq++;
        }
        return $result;
    }

    public function isDivision(int $divisible, int $divisor): bool
    {
        return ($divisible % $divisor) === 0 && ($divisible > $divisor);
    }
}
