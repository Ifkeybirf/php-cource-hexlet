<?php
//namespace App\Solution;

/*
*isLeapYear(2018); // false
*isLeapYear(2017); // false
*isLeapYear(2016); // true
*/


// BEGIN (write your solution here)
function isLeapYear($year){
    $isKrat4   = $year % 4 === 0  ;
//	var_dump($isKrat4);
    $isKrat100 = $year % 100 === 0  ;
//	var_dump($isKrat100);

//	$result = ( $isKrat4 && $isNotKrat100 );


//  return $isKrat4 && !$isKrat100 ;
    $res = !!$isKrat4 && !$isKrat100 ;
//var_dump($res);
    return $res ;
}

$god = 2016 ;

echo "for year $god \n";
var_dump( isLeapYear($god) );


// END

// return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
?>
