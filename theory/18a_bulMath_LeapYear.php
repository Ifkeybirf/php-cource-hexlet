<?php

namespace App\Solution;


// BEGIN (write your solution here)

function isLeapYear($year) {
    $isKrat4 = $year % 4 === 0 ;
    $isKrat100 = $year % 100 === 0 ;
    $isKrat400 = $year % 400 === 0 ;
//    $res = !!$isKrat4 === !$isKrat100 ;
    if ( $isKrat400 || ( $isKrat4 && !$isKrat100 ) )  
        return true  ;
     else 
        return false ;
    
}

//isLeapYear(2018);
//isLeapYear(2017);
//isLeapYear(2016);


// END

