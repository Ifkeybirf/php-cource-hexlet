<?php

function addDigits(int $userInput)
{
    switch (true) {
        case ($userInput < 0):
            return null;
        case ($userInput >= 0 && $userInput < 10):
            return $userInput;
        case ($userInput > 9):
            $str = (string)$userInput;
            $lng = strlen($str);
            $res = $qq = 0;

            while ($qq < $lng) {
                $res += (int)$str[$qq];
                $qq++;
            }
            if ($res > 9) {
                return addDigits($res);
            }
    return $res;
    }
}

$ask = 221513; // 5

print_r($ask . ' <= has been entered' . PHP_EOL
    . 'answer is ' . addDigits($ask) . PHP_EOL);
