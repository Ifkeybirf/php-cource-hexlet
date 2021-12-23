<?php

function isDivision(int $divisible, int $divisor): bool {
    /*
     * $a = $divisible / $divisor;
     * $b = intdiv($divisible, $divisor);
     * return ($a === $b) ? true : false;
     */

    return ($divisible / $divisor) === intdiv($divisible, $divisor) ? true : false;
}

function fizzBuzz(int $begin, int $end) {
    if ($begin > $end)
    {
        return ' ';
    }

    define( 'fizz' , 3);
    define ('buzz' , 5);
    
    $qq = $begin;
    while ($qq <= $end)
    {
        $resFizz = isDivision($qq, fizz);
        $resBuzz = isDivision($qq, buzz);
        $resFizzBuzz = ($resFizz && $resBuzz) ;

        if ($resFizz && $resBuzz)
            {
                print 'FizzBuzz ';
            }elseif ($resFizz && !$resBuzz)
            {
                print 'Fizz ';
            }elseif ($resBuzz && !$resFizz)
            {
                print 'Buzz ';
            }elseif (!$resFizz && !$resBuzz && !$resFizzBuzz)
                {
                    print_r($qq . ' ');
                }
    $qq++;
    }
    return null;
}

fizzBuzz(11, 20);
