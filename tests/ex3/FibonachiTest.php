<?php

namespace PHPCourseTest\ex3;

use PHPCourse\ex3\Fibonachi;

class FibonachiTest extends \PhpUnit\Framework\TestCase
{
    /**
     * @dataProvider fibonachiProvider
     */
    public function testFibonachi(int $expected, int $num): void
    {
        $fibObj = Fibonachi::getInstance();
        $actual = $fibObj->fib($num);
        self::assertEquals($expected, $actual);
    }

    public function testFibonachiWrong(): void
    {
        $fibObj = Fibonachi::getInstance();
        $this->expectException(\InvalidArgumentException::class);
        $fibObj->fib(-1);
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
