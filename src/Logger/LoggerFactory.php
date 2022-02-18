<?php

namespace PHPCourse\Logger;

class LoggerFactory
{
    private array $config;
    private string $loggerName;

    public function __construct(array $conf, $name)
    {
        $this->config = $conf;
        $this->loggerName = $name;
    }

    public function createLogger(): LoggerInterface
    {
        switch ($this->config[$this->loggerName]['type']) {
            case 'stdo':
                return new LoggerStdO();
            case 'file':
                return new LoggerFile($this->config[$this->loggerName]['logFilename']);
            default:
                return new LoggerFake();
        }
    }
}
