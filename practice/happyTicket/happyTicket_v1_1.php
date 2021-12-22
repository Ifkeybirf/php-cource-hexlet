<?php

namespace primary;
require_once 'randomTicketNumber.php';

function isTicketHappy($objTicket)
{
    if (!$objTicket) {
        return false;
    }
    $lSum = $rSum = 0;
    $str2Arr = str_split($objTicket);
    $halfNum = halfNumF($objTicket);
    print_r( 'halfNum:' . $halfNum .PHP_EOL );
    for ($qq = 0; $qq <= $halfNum - 1; $qq++) {
        $lSum = $lSum + $str2Arr[$qq];
    }
    print_r('lSum= ' . $lSum . PHP_EOL);

    for ($qq = $halfNum ; $qq <= ($halfNum * 2 -1); $qq++){
        $rSum = $rSum + $str2Arr[$qq];
    }
    print_r('rSum= ' . $rSum . PHP_EOL);
    return $lSum === $rSum;
}

$ticketForCheck = randomTicketNumber(6);
print_r('checking ticket ' . $ticketForCheck . PHP_EOL);

if (isTicketHappy($ticketForCheck) === true) {
    print_r(PHP_EOL . 'You WON! ticket is HAPPY!' . PHP_EOL);
} else {
    print_r(PHP_EOL . 'you loose :( the ticket is unhappy' . PHP_EOL);
}
