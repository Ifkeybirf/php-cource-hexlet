<?php

namespace PHPCourse\ex4;

class AddDigits
{
    protected static $instance;

    private function __construct()
    {
        // empty private construct function, so nobody will be able to call it directly
    }

    public static function getInstance(): AddDigits
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function addDigits(int $userInput): int
    {
        switch (true) {
            case ($userInput < 0):
                throw new \InvalidArgumentException('input digit must be > 0');
            case ($userInput < 10):
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
                    return $this->addDigits($res);
                }
                return $res;
        }
    }
}
