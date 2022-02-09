<?php

namespace PHPCourseTest\ex3;

class FibonachiTest extends \PhpUnit\Framework\TestCase
{
    /**
     * @dataProvider fibonachiProvider
     */
    public function testFibonachi(int $expected, int $num): void
    {
        $actual = (new \PHPCourse\ex3\Fibonachi())->fib($num);
        self::assertEquals($expected, $actual);
    }

    public function fibonachiProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [1, 2],
            [2, 3],
            [3, 4],
            [5, 5],
            [8, 6],
            [13, 7],
            [1597, 17],
        ];
    }
}
