<?php

namespace PHPCourse\Logger;

class LoggerFactory
{
    private array $config;

    public function __construct($conf)
    {
        $this->config = $conf;
    }

    public function createLogger(): LoggerInterface
    {
        switch ($this->config['logger']['type']) {
            case 'stdo':
                return new LoggerStdO();
            case 'file':
                return new LoggerFile($this->config['logger']['logFilename']);
            default:
                return new LoggerFake();
        }
    }
}
