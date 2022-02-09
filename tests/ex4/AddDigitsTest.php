<?php

namespace PHPCourseTest\ex4;

use PHPCourse\ex4\AddDigits;

class AddDigitsTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider addDigitsProvider
     */
    public function testAddDigits(int $exp, int $num): void
    {
        $check = AddDigits::getInstance();
        $actual = $check->addDigits($num);
        self::assertEquals($exp, $actual);
    }

    public function addDigitsProvider(): array
    {
        return [
            [0, 0],
            [1, 1],
            [9, 9],
            [1, 10],
            [2, 38],
            [4, 76],
        ];
    }

    public function testAddDigitsWrong(): void
    {
        $check1 = AddDigits::getInstance();
        $this->expectException(\InvalidArgumentException ::class);
        $check1->addDigits('-1');
    }

    public function testAddDigitsWrongType(): void
    {
        $check2 = AddDigits::getInstance();
        $this->expectException(\TypeError ::class);
        $check2->addDigits('a');
    }
}
