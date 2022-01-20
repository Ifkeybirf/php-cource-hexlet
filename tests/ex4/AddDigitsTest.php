<?php

namespace PHPCourse\ex4;

use PHPUnit\Framework\TestCase;

class AddDigitsTest extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     * @return       void
     */

    public function testAddDigits($exp, $num): void
    {
        $check = new \PHPCourse\ex4\AddDigits();
        $actual = $check->addDigits($num);
        self::assertEquals($exp, $actual);
    }

    public function addDigitsProvider(): array
    {
        return [
            ['0','0'],
            ['1','1'],
            ['9','9'],
            ['1','10'],
            ['2','38'],
            ['4','76'],
        ];
    }

    public function testAddDigitsWrong(): void
    {
        $check1 = new \PHPCourse\ex4\AddDigits();
        $this->expectException(\InvalidArgumentException ::class);
        $check1->addDigits('-1');
    }

    public function testAddDigitsWrongType(): void
    {
        $check2 = new \PHPCourse\ex4\AddDigits();
        $this->expectException(\TypeError ::class);
        $check2->addDigits('a');
    }
}
