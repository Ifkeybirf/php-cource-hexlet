<?php

namespace PHPCourse\Logger;

class LoggerFile extends AbstractLogger
{
    private string $logFileName;

    public function __construct(string $fd)
    {
        $this->logFileName = __DIR__ . '/../../' . $fd;
    }

    public function log(string $msg): void
    {
        file_put_contents($this->logFileName, $msg . PHP_EOL, FILE_APPEND);
    }
}
