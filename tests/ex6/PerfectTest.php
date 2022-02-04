<?php

namespace ex6;

class PerfectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider isPerfectDataprovider
     */
    public function testIsPerfect(int $control, bool $expect): void
    {
        $checker = new \PHPCourse\ex6\Perfect();
        self::assertEquals($checker->isPerfect($control), $expect);
    }

    public function isPerfectDataprovider(): array
    {
        return [
            [6, true],
            [62, false],
            [28, true],
        ];
    }
}
