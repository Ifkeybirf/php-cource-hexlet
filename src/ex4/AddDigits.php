<?php
namespace PHPCourse\ex4;

class AddDigits
{
    function addDigits(int $userInput)
    {
        switch (true) {
        case ($userInput < 0):
            throw new \InvalidArgumentException('input digit must be > 0');
        case ($userInput >= 0 && $userInput < 10):
            return $userInput;
        default:
            $str = (string)$userInput;
            $lng = strlen($str);
            $res = $qq = 0;

            while ($qq < $lng) {
                $res += (int)$str[$qq];
                $qq++;
            }
            if ($res > 9) {
                return (new \PHPCourse\ex4\AddDigits)->addDigits($res);
            }
            return $res;
        }
    }
}
