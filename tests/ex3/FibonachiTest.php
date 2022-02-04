<?php

namespace ex3;

use PHPUnit\Framework\TestCase;

class FibonachiTest extends TestCase
{
    /**
     * @dataProvider fibonachiProvider
     */
    public function testFibonachi(int $num, int $expected): void
    {
        $actual = (new \PHPCourse\ex3\Fibonachi())->fib($num);
        self::assertEquals($actual, $expected);
    }

    public function fibonachiProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [2, 1],
            [3, 2],
            [4, 3],
            [5, 5],
            [6, 8],
            [7, 13],
            [17, 1597],
        ];
    }
}
