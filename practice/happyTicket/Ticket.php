<?php

namespace Ticket;

function isNumberEven(string $number): bool
{

    if ($number % 2 !== 0) {
        return false;
    }
    else return true;
}

function randomTicketNumber(int $cnt)
{
    if (isNumberEven($cnt) === false) {
        print_r('the number of digits must be even' . PHP_EOL);
        return 0;
    }
    $txt = '';
    for ($qq = 1; $qq <= $cnt; $qq++) {
        $tmp = random_int(1, 9);
        $txt .= $tmp;
    }
    return $txt;
}

function halfNumF($inputString)
{
    $myStrLn = strlen($inputString);
    $a = intdiv($myStrLn, 2);
    $b = $myStrLn / 2;

    if ($a === $b) {
        return $a;
    } else return 0;
}

function isHappy(string $TicketNumber): bool
{
    if (!is_numeric("$TicketNumber")) {
        return false;
    }

    $halfNum = halfNumF($TicketNumber);
    if ($halfNum < 1) {
        return false;
    }
    $lSum = $rSum = 0;
    $str2Arr = str_split($TicketNumber);

    for ($qq = 0; $qq <= $halfNum - 1; $qq++) {
        $lSum += $str2Arr[$qq];
        $rSum += $str2Arr[$qq+$halfNum];
    }
    return $lSum === $rSum;
}
