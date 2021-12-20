<?php

function isDivision(int $divided, int $divider): bool {
    $a = $divided / $divider;
    $b = intdiv($divided, $divider);
    return ($a ===$b) ? true : false;
}
//var_dump(isDivision(5,2) ) ;
function fizzBuzz(int $begin, int $end) {
    if ($begin > $end)
    {
        return ' ';
    }

    define( 'fizz' , 3);
    define ('buzz' , 2);
    
    $qq = $begin;
    while ($qq <= $end)
    {
        $resFizz = isDivision($qq, fizz);
        $resBuzz = isDivision($qq, buzz);
        $resFizzBuzz = ( $resFizz && $resBuzz) ;
        print "(iter $qq) ";
        if ($resFizz && $resBuzz)
            {
                print 'FizzBuzz ';
            }elseif ($resFizz)
            {
                print 'Fizz ';
            }elseif ($resBuzz)
            {
                print 'Buzz ';
            }elseif (!$resFizz && !$resBuzz && !$resFizzBuzz)
                {
                    print "$qq ";
                }
    $qq++;
    }
}

fizzBuzz(9, 15);
