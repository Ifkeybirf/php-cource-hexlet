<?php

namespace PHPCourse\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract public function log(string $msg): void;
    public function err(string $msg): void
    {
        $this->Log('[ERR]: ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->Log('[Warn]: ' . $msg);
    }

    public function inf(string $msg): void
    {
        $this->Log('[INFO]: ' . $msg);
    }
}
