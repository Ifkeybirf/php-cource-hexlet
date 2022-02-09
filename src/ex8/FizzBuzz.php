<?php

namespace PHPCourse\ex8;

class FizzBuzz
{
    public function fizzBuzz(int $begin, int $end): void
    {
        print_r($this->fizzBuzzCalc($begin, $end) . PHP_EOL);
    }

    public function fizzBuzzCalc(int $begin, int $end): string
    {
        $result = '';
        $qq = $begin;
        while ($qq <= $end) {
            $resFizz = $this->isDivision($qq, 3);
            $resBuzz = $this->isDivision($qq, 5);

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
        return trim($result);
    }

    public function isDivision(int $divisible, int $divisor): bool
    {
        return ($divisible % $divisor) === 0;
    }
}
