<?php

namespace PHPCourse\Logger;

class LoggerFactory
{
    private $logFile;

    public function __construct(string $logFileName)
    {
        $this->logFile = $logFileName;
    }

    public function createLogger($loggerType):LoggerInterface
    {
        switch ($loggerType) {
            case 'stdo':
                return new LoggerStdO();

            case 'file':
                return new LoggerFile($this->logFile);
            default
                return new LoggerFake();
        }
    }
}
