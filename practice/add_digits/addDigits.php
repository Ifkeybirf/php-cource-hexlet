<?php

function addDigits( $userInput)
{
    switch($userInput) {
        case ($userInput < 10):
        {
            print $userInput . PHP_EOL;
        }
        case ($userInput > 9):
        {
            (string) $str = ''. $userInput;
            $lng = strlen($str);
//            var_dump($lng);echo "<-lng\n";

            $res = 0;
            $qq = 0;
//          for ($qq = 0; $qq < $lng; $qq++) {
            while ($qq < $lng) {
//              print "qq $qq\n";
//              var_dump('str[$qq] ' . $str[$qq]);
                $res = $res + $str[$qq];
//              var_dump('res: ' . $res . PHP_EOL);
                $qq++;
            }
            if ($res > 9)
            {
                addDigits($res);
            } else
                print 'answer is ' . $res . PHP_EOL;

            return $res;
        }
    }
}

$ask = 221513;
//$ask = 38;
print_r($ask . '<= has been entered' . PHP_EOL);
addDigits($ask);
