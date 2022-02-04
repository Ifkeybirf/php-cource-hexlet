<?php

require_once __DIR__ . '/../vendor/autoload.php';

//someMyLogger = new LoggerStdO();
$someMyLogger = new \PHPCourse\Logger\LoggerFile('myapp.log');
//$someMyLogger   = new \PHPCourse\Logger\LoggerFake();

$appObj = new PHPCourse\App($someMyLogger);

$appObj->run();
