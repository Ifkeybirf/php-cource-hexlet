<?php

namespace PHPCourseTest\ex2;

class Power3Test extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider power3Provider
     */
    public function testPower3(bool $expected, int $digit): void
    {
        $check = new \PHPCourse\ex2\Power3();
        self::assertEquals($expected, $check->isPowerOfThree($digit));
    }

    public function power3Provider(): array
    {
        /**
         * control data and expected result
         */
        return [
            [false, 4],
            [true, 9],
            [false, 219],
            [false, 80],
            [true, 243],
            [false, 1],
            [true, 3],
            [true, 729],
            [false, 728],
        ];
    }
}
