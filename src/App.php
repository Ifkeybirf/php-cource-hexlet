<?php

namespace PHPCourse;

class App
{
    private \PHPCourse\Logger\LoggerInterface $myLogger;

    public function __construct(\PHPCourse\Logger\LoggerInterface $myLogger)
    {
        $this->logger = $myLogger;
    }

    public function run(): void
    {
        /*
        $this->logger->warn('warning text');
        $this->logger->inf('info text message');
        $this->logger->err('super-mega-critical error text msg');
        */
        $ticketForCheck = (new \PHPCourse\ex7\HappyTicket())->randomTicketNumber(6);
        $this->logger->inf('ticket ' . $ticketForCheck . ' was generated');

        if ((new \PHPCourse\ex7\HappyTicket())->isHappy($ticketForCheck) === true) {
            $this->logger->inf('ticket number ' . $ticketForCheck . 'is won');
        } else {
            $this->logger->inf('ticket number ' . $ticketForCheck . 'is lost');
        }
    }
}
