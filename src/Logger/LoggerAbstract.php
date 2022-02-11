<?php

namespace PHPCourse\Logger;

abstract class LoggerAbstract implements LoggerInterface
{
    abstract public function log(string $msg): void;

    public function err(string $msg): void
    {
        $this->log('[ERR]: ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->log('[Warn]: ' . $msg);
    }

    public function inf(string $msg): void
    {
        $this->log('[INFO]: ' . $msg);
    }
}
