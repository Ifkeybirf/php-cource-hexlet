<?php

namespace ex2;

class Power3Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider power3Provider
     */
    public function testPower3(int $digit, int $expected): void
    {
        $check = new \PHPCourse\ex2\Power3();
        self::assertEquals($check->isPowerOfThree($digit), $expected);
    }

    public function power3Provider(): array
    {
        /**
         * control data and expected result
         */
        return [
            [4, 0],
            [9, 1],
            [219, 0],
            [80, 0],
            [243, 1],
            [1, 0],
            [3, 1],
            [729, 1],
            [728, 0],
        ];
    }
}
