<?php

function randomTicketNumber(int $num)
{
	//check num is even
    if (($num % 2) !== 0) {
        print_r('the number of digits must be even' . PHP_EOL);
        return 0;
    }

    $txt = '';
    for ($qq = 1; $qq <= $num; $qq++) {
        $tmp = random_int(1, 9);
        $swp[$qq] = $tmp;
        $txt .= $tmp ;
    }
    $res[1] = $swp;
    $res['cnt'] = $num;
    $res['str'] = $txt;
//  var_dump($res);
//  print_r($res);
    return $res;
}

function isHappy($objTicket)
{
    if (!$objTicket) {
        return 'incorrect input params';
    }
    $lSum = $rSum = 0; //echo "lSum $lSum, rSum $rSum\n";
    $halfNum = $objTicket['cnt'] / 2;
    $ticketNumberArr =  $objTicket[1];
    for ($qq = 1; $qq <= $halfNum; $qq++) {
        $lSum = $lSum + $ticketNumberArr[$qq];
    }
    print_r('lSum= ' . $lSum . PHP_EOL);

    for ($qq = $halfNum+1; $qq <= $objTicket['cnt']; $qq++) {
        $rSum = $rSum + $ticketNumberArr[$qq];
    }
    print_r('rSum ' . $rSum . PHP_EOL);
    print_r($objTicket['str'] . PHP_EOL);

    if ($lSum === $rSum && $lSum !== 0)	{
        print_r('You WON! ticket is HAPPY!' . PHP_EOL);
	} else {
        print_r('you loose :( the ticket is unhappy' . PHP_EOL);
    }
}

//randomTicketNumber(3);
//randomTicketNumber(4);
//randomTicketNumber(6);

isHappy(randomTicketNumber(6));
