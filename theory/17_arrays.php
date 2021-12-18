<?php

function foo()
{
    return [1, 'b'];
}

$arr = [1,2,3];
$arr['dfgdf'] = 4;
$arr[777] = 77;
$arr['qwe'] = 88;
$arr['123'] = 99;

foreach($arr as $k => $v) {
  echo $k, '=', $v, PHP_EOL;
}

//print_r($arr);

$arr2 = [
  0 => 1,
  1 => 2,
  2 => 3,
  'dfgdf' => 4,
  777 => 77,
  'qwe' => 88,
  123 => 99,
];


