<?php

namespace PHPCourse\Logger;

interface LoggerInterface
{
    public function err(string $msg): void;
    public function warn(string $msg): void;
    public function inf(string $msg): void;
}
