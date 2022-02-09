<?php

namespace PHPCourseTest\ex6;

class PerfectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider isPerfectDataprovider
     */
    public function testIsPerfect(bool $expect, int $actual): void
    {
        $checker = new \PHPCourse\ex6\Perfect();
        self::assertEquals($expect, $checker->isPerfect($actual));
    }

    public function isPerfectDataprovider(): array
    {
        return [
            [true, 6],
            [false, 62],
            [true, 28],
        ];
    }
}
