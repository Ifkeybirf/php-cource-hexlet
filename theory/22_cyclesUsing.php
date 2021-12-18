<?php

function joinNumbersFromRange($start, $finish){
  $res = '';
  while ($start <= $finish) {
    $res = $res . $start ;
    $start = $start + 1 ;
  }
  return $res ;
}

var_dump( joinNumbersFromRange(4, 11) );

?>


suggested solution:
// BEGIN
function joinNumbersFromRange($start, $end)
{
    $i = $start;
    $result = '';

    while ($i <= $end) {
        $result = "{$result}{$i}";
        $i = $i + 1;
    }

    return $result;
}
// END

