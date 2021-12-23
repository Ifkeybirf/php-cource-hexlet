<?php

namespace primary;
require_once 'Ticket.php';
//use function \Ticket\isHappy;

$ticketForCheck = \Ticket\randomTicketNumber(6);
/*
 * $ticketForCheck = '3'; //false
 * $ticketForCheck = '00'; //true
 * $ticketForCheck = '3a'; // false
 * $ticketForCheck = '054702'; // true
 */

print_r('checking ticket ' . $ticketForCheck . PHP_EOL);

if (\Ticket\isHappy($ticketForCheck) === true) {
    print_r(PHP_EOL . 'You WON! ticket is HAPPY!' . PHP_EOL);
} else {
    print_r(PHP_EOL . 'you loose :( the ticket is unhappy' . PHP_EOL);
}
