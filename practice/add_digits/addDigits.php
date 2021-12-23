<?php

function addDigits(int $userInput)
{
    switch($userInput) {
        case ($userInput < 0):
        {
            echo '<0'; return null;
        }
        case ($userInput < 10):
        {
            return $userInput;
        }
        case ($userInput > 9):
        {
            (string) $str = ''. $userInput;
            $lng = strlen($str);
            $res = $qq = 0;
            $str2Arr = str_split($str);

            while ($qq < $lng) {
                $res += $str2Arr[$qq];
                $qq++;
            }
            if ($res > 9)
            {
                return addDigits($res);
            } else
                return $res;

        }
    }
}

$ask = 221513; // 5

print_r($ask . '<= has been entered' . PHP_EOL
    . 'answer is ' . addDigits($ask) . PHP_EOL);
