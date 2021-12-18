<?php

	const myPI = 3.14 ;
    $myword='Father!';
    print_r($myword . "\n");
    $myword='Mother';
    print_r($myword . "\n");
	print_r('myPI ' . myPI . "\n");
	print_r('php version ' . PHP_VERSION . "\n");
    print_r('cur dir ' . __DIR__ );
	print_r('  cur file ' . __FILE__ . "\n");


	$str = <<<EOT
Пример строки,
охватывающей несколько строк,
с использованием heredoc-синтаксиса.
Здесь не нужно экранировать ни одинарные ', ни двойные " кавычки.
EOT;
print_r($str); echo "\n";
	$greeting = 'dear'; 
	print_r("{$greeting}, {$myword} !");

	$stepsDay1Count = 10;
	$stepsDay2Count = 15;
	$stepsDay3Count = 5;
	$stepsSum = $stepsDay1Count + $stepsDay2Count + $stepsDay3Count;
	print_r("\n" . $stepsSum );

	$ЗrdRoundPoints = 75; echo "\n";
	print_r($ЗrdRoundPoints); echo "\n";
	print_r("length " . strlen($ЗrdRoundPoints) . "\n");

	print_r(strrev($myword) . "\n");

print_r("\n\n");

