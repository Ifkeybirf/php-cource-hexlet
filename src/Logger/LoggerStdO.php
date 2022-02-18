<?php

namespace PHPCourse\Logger;

class LoggerStdO extends LoggerAbstract
{
    public function log(string $msg): void
    {
        print_r($msg . PHP_EOL);
    }
}
