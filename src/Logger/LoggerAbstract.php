<?php

namespace PHPCourse\Logger;

abstract class LoggerAbstract implements LoggerInterface
{
    abstract public function log(string $msg): void;

    public function err(string $msg): void
    {
        $this->log('[ERR][' . date("Y-m-d H:i:s") . '] ' . $msg);
    }

    public function warn(string $msg): void
    {
        $this->log('[Warn][' . date("Y-m-d H:i:s") . '] ' . $msg);
    }

    public function inf(string $msg): void
    {
        $this->log('[INFO][' . date("Y-m-d H:i:s") . '] ' . $msg);
    }
}
