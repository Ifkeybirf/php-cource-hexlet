<?php

function randomTicketNumber(int $num)
{
    //check the num is even
    if ($num % 2 !== 0) {
        print_r('the number of digits must be even' . PHP_EOL);
        return 0;
    }
    $txt = '';
    for ($qq = 1; $qq <= $num; $qq++) {
        $tmp = random_int(1, 9);
        $txt .= $tmp;
    }
    return $txt;
}

function halfNumF($inputString)
{
    $myStrLn = strlen($inputString);
    $a = $myStrLn % 2;
    $b = $myStrLn / 2;

    return  $a ? $b : $b;
}
