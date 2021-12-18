<?php
function isArgumentsForSubstrCorrect($str, $startIdx, $substrLength){
    $res = null ;
    if ($substrLength < 0 ) {$res = false; }//return $res; }
    elseif ($startIdx < 0 ) {$res = false; }//return $res; } 
    elseif (strlen($str) <= ($startIdx + 1) ) {$res = false; }//return $res; }
    
    elseif ( ($substrLength + $startIdx -1   ) > strlen($str) ) {$res = false; }// return $res; }

    else { $res = true ; } ;
//    var_dump($res);
    return $res ;
}
$str = 'Sansa Stark';
var_dump(isArgumentsForSubstrCorrect($str, -1, 3));  // false
var_dump(isArgumentsForSubstrCorrect($str, 4, 100)); // false
var_dump(isArgumentsForSubstrCorrect($str, 10, 10)); // false
var_dump(isArgumentsForSubstrCorrect($str, 11, 1));  // false
var_dump(isArgumentsForSubstrCorrect($str, 3, 3));   // true
var_dump(isArgumentsForSubstrCorrect($str, 0, 5));   // true
?>
suggested solution:
function isArgumentsForSubstrCorrect($str, $index, $length)
{
    $stringLength = strlen($str);

    if ($index < 0) {
        return false;
    } elseif ($length < 0) {
        return false;
    } elseif ($index >= $stringLength) {
        return false;
    } elseif ($index + $length > $stringLength) {
        return false;
    }

    return true;
}

