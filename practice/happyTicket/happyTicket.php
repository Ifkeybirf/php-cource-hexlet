<?php

function randomTicketNumber(int $num)
{
	//check num is even
	if ( ($num % 2) !== 0 )
	{ 
		print_r("the number of digits must be even \n");
		return 0 ;
	}

	$txt = '';
	for ($qq = 1; $qq <= $num; $qq += 1)
	{
		$tmp = random_int(1, 9);
		$swp[$qq] = $tmp;
		$txt = $txt . $tmp ;
	}	
	$res[1] = $swp;
	$res['cnt'] = $num;
	$res['str'] = $txt;
//var_dump($res);
	print_r($res);
	return $res;
}


function isHappy($objTicket)
{
	if ( !$objTicket ) {return 'incorect input params';}
	$lSum = $rSum = 0; //echo "lSum $lSum, rSum $rSum\n";
	$halfNum = $objTicket['cnt'] / 2 ;
	$ticketNumberArr =  $objTicket[1];
	
	for ($qq = 1; $qq <= $halfNum; $qq += 1)
	{
		$lSum = $lSum + $ticketNumberArr[$qq];
	}
	echo "lSum=$lSum.\n";

	for ($qq = ($halfNum+1); $qq <= $objTicket['cnt']; $qq += 1)
	{
		$rSum = $rSum + $ticketNumberArr[$qq];
	}
	 echo "rSum=$rSum.\n";
print_r($objTicket['str'] . "\n");
	if ( ($lSum === $rSum) && $lSum !== 0 )
	{
		print_r("You WON! ticket is HAPPY!\n");
	} else {echo "you loose :( the ticket is unhappy\n"; }
}

//randomTicketNumber(3);
//randomTicketNumber(4);
//randomTicketNumber(6);

echo "---";
$titek = randomTicketNumber(8);
isHappy($titek);

