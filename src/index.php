<?php

namespace PHPCourse;

use PHPCourse\ex7\HappyTicket;
use PHPCourse\Logger\LoggerFactory;

require_once __DIR__ . '/../vendor/autoload.php';
$myConf = require __DIR__ . '/../conf.php';

$logFactory = new LoggerFactory($myConf);
$hTicketObj = new HappyTicket($logFactory->createLogger());

$check = $hTicketObj->isHappy('123');
var_dump($check);
