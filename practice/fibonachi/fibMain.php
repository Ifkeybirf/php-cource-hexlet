<?php

function f(int $n)
{
    if ($n < 0) {
        return 'invalid input value';
    }
    if ($n === 0) {
        return 0;
    }
    if ($n === 1) {
        return 1;
    }
/*
 *  f(0) = 0;
 *  f(1) = 1;
 *  f(2) = 1 + 0 = 1
 *  f(3) = 1 + 1 = 2
 *  f(4) = 2 + 1 = 3
 *  f(5) = 3 + 2 = 5
 *  f(6) = 5 + 3 = 8
 *  f(7  = 8 + 5 = 13
 */

    return f($n-2) + f($n-1);
}

$lim=17;
for ($zz=0; $zz<=$lim; $zz+= 1) {
    Print_r(f($zz) . ' ');
}
