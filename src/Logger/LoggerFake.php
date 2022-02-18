<?php

namespace PHPCourse\Logger;

class LoggerFake extends LoggerAbstract
{
    public ?string $lastMsg = null;

    public function log(string $msg): void
    {
        $this->lastMsg = $msg;
    }

    public function err(string $msg): void
    {
        $this->log($msg);
    }

    public function inf(string $msg): void
    {
        $this->log($msg);
    }

    public function getLastMsg(): string
    {
        return $this->lastMsg;
    }
}
