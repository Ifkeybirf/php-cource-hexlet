<?php

namespace PHPCourse\Logger;

abstract class AbstractLogger implements LoggerInterface
{
    abstract public function log(string $msg): void;

    abstract public function error(string $msg): void
    {
        $this->Log('[ERR]: ' . $msg);
    }

    abstract public function warning(string $msg): void
    {
        $this->Log('[Warn]: ' . $msg);
    }

    abstract public function info(string $msg): void
    {
        $this->Log('[INFO]: ' . $msg);
    }
}
