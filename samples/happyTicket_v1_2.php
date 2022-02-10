<?php
/**
 * Php version 7.4
 * Example of usage HappyTicket class as mini app
 *
 * @category Example
 * @package  PHPCourse
 * @author   Ifkey Ifkeyjd <ifkeybirf@hotmail.com>
 * @license  GPL v2
 * @version  GIT: trunk
 * @link     http://github.com/ifkeybirf/
 */
namespace PHPCourseSample\ex7;

require_once __DIR__ . '/../vendor/autoload.php';
//require_once 'HappyTicket.php';
use PHPCourse\ex7\HappyTicket;

$ticketObj = HappyTicket::getInstance();
$ticketForCheck = $ticketObj->randomTicketNumber(6);
/*
 * $ticketForCheck = '3'; //false
 * $ticketForCheck = '00'; //true
 * $ticketForCheck = '3a'; // false
 * $ticketForCheck = '054702'; // true
 * $ticketForCheck = 'bb'; // false
 */

$ticketObj->LogOut->inf('checking ticket ' . $ticketForCheck);

if ($ticketObj->isHappy($ticketForCheck) === true) {
    $ticketObj->LogOut->log('[WON!] ticket is HAPPY!');
} else {
    $ticketObj->LogOut->warn('you loose :( the ticket is unhappy');
}
