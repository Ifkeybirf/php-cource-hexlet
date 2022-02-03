<?php

namespace PHPCourse\Logger;

interface LoggerInterface
{
    public function error(string $msg): void;
    public function warning(string $msg): void;
    public function info(string $msg): void;
}
