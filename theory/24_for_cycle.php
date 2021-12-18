<?php

function sumOfSeries($start, $end){
    $sum = 0;
      for ($i = $start; $i <= $end; $i +=1 )
{ $sum = $sum + $i; }
	var_dump($sum);
    return $sum ;
}

sumOfSeries(4,7);
?>

suggested solution
$sum = 0;
    for ($i = $start; $i <= $finish; $i++) {
        $sum += $i;
    }

    return $sum;

