<?php

function calculate($op, $dig1, $dig2){
    // $op : + - / *
    switch ($op) {
        case '+' :
            return $dig1 + $dig2 ;
        
        case '-' :
            return $dig1 - $dig2 ;
        
        case '*' :
            return $dig1 * $dig2 ;
        
        case '/' :
            if ($dig2 === 0 ) {
                return 'error: division by zero';
            } else
            return $dig1 / $dig2 ;
        
        default : 
            return null ;
    }
}

var_dump( calculate('-', -3,-10) );

?>

// suggested

function calculate($operation, $a, $b)
{
    switch ($operation) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '/':
            return $a / $b;
        case '*':
            return $a * $b;
        default:
            return null;
    }
}

