<?php

namespace Ticket;

require_once 'HappyTicket.php';

$ticketForCheck = (new \PHPCourse\ex7\HappyTicket())->randomTicketNumber(6);
/*
 * $ticketForCheck = '3'; //false
 * $ticketForCheck = '00'; //true
 * $ticketForCheck = '3a'; // false
 * $ticketForCheck = '054702'; // true
 * $ticketForCheck = 'bb'; // false
 */

print_r('checking ticket ' . $ticketForCheck . PHP_EOL);

if ((new \PHPCourse\ex7\HappyTicket())->isHappy($ticketForCheck) === true) {
    print_r(PHP_EOL . 'You WON! ticket is HAPPY!' . PHP_EOL);
} else {
    print_r(PHP_EOL . 'you loose :( the ticket is unhappy' . PHP_EOL);
}
