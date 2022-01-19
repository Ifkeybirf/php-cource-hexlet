<?php

use PHPUnit\Framework\TestCase;

class AddDigitsTest extends TestCase
{
    /**
     * @dataProvider addDigitsProvider
     * @return       array
     */

    public function testAddDigits($exp, $num): void
    {
        $check = new \PHPCourse\ex4\AddDigits();
        $actual = $check->addDigits($num);
        self::assertEquals($exp, $actual);
    }

    function addDigitsProvider(): array
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

    function testAddDigitsWrong(): void
    {
        $check1 = new \PHPCourse\ex4\AddDigits();
        $this::getExpectedExceptionMessage('input digit must be > 0');
        $this->expectException(\InvalidArgumentException ::class);
        $check1->addDigits('-1');
    }

    function testAddDigitsWrongType(): void
    {
        $check2 = new \PHPCourse\ex4\AddDigits();
        $this::getExpectedExceptionMessage('input digit must be a digit');
        $this->expectException(\TypeError ::class);
        $check2->addDigits('a');
    }
}
