<?php

namespace PHPCourseTest\ex1;

class BinarySumTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider binarySumProvider
     */
    public function testBinarySum(string $exp, string $num1, string $num2): void
    {
        $check1 = new \PHPCourse\ex1\BinarySum();
        $actual = $check1->binarySum($num1, $num2);
        self::assertEquals($exp, $actual);
    }

    public function binarySumProvider(): array
    {
        return [
            ['10101', '10000', '101'],
            ['101', '1', '100'],
            ['1', '0', '1'],
            ['0', '0', '0'],
        ];
    }

    /**
     * @dataProvider binarySumWrongProvider
     */
    public function testBinarySumWrong(string $num1, string $num2): void
    {
        $check = new \PHPCourse\ex1\BinarySum();
        $this->expectException(\InvalidArgumentException::class);
        $check->binarySum($num1, $num2);
    }

    public function binarySumWrongProvider(): array
    {
        return [
            ['12', '100'],
            ['a1', '1'],
            ['0', 'a'],
            ['1', '2'],
        ];
    }
}
