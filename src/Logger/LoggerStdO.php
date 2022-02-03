<?php

namespace PHPCourse\Logger;

public class LoggerStdO extends AbstractLogger
{
    public function log(string $msg): void
    {
        print_r($msg . PHP_EOL);
    }
}
