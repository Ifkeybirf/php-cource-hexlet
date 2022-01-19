<?php
namespace PHPCourse\ex1;

assert_options(ASSERT_ACTIVE, 1);
assert_options(ASSERT_WARNING, 0);

use mysql_xdevapi\Exception;
use function Webmozart\Assert\Tests\StaticAnalysis\string;

class BinarySum
{
    public function binarySum(string $addend1, string $addend2): string
    {
        $pattern = '/^[0-1]+$/';

        if (!preg_match($pattern, $addend1)) {
            throw new \InvalidArgumentException('addend1 should contain only 0 and 1');
        } elseif (!preg_match($pattern, $addend2)) {
            throw new \InvalidArgumentException('addend2 should contain only 0 and 1');
        }

        $sumDec = bindec($addend1) + bindec($addend2);
        return decbin($sumDec);
    }
}
/*
 * $a = '1101';
 * $b = '101';
 *
 * print_r("$a + $b = " . (new BinarySum())->binarySum($a, $b)  . PHP_EOL);
 */
