<?php

namespace PHPCourse\ex6;

class PerfectTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider testIsPerfectDataprovider
     * @return       void
     */
    public function testIsPerfect($control, $expect): void
    {
        $checker = new Perfect();
        self::assertEquals((int)$checker->isPerfect($control), $expect);
    }

    public function testIsPerfectDataprovider(): array
    {
        return [
            ['6', '1'],
            ['62', '0'],
            ['28', '1'],
        ];
    }
}
