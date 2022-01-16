<?php

namespace PHPCourse;

class AddDigits
{
    function addDigits(int $userInput)
    {
        switch (true) {
            case ($userInput < 0):
                return null;
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
                    return addDigits($res);
                }
                return $res;
        }
    }

}
