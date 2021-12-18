<?php

function printNumbers($maxNumber){
    while ($maxNumber >= 1) {
    print_r($maxNumber . "\n");
    $maxNumber = $maxNumber - 1 ;
  }
    print_r('finished!');
}

printNumbers(4);

?>

suggested solution:
    // BEGIN
    $i = $firstNumber;
    while ($i >= 1) {
        print_r("{$i}\n");
        $i = $i - 1;
    }
    print_r('finished!');
    // END

