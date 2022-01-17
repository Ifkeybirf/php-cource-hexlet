<?php
use PHPUnit\Framework\TestCase;

class BinarySumTest extends TestCase
{
    public function testBinarySum(): void
    {
        $check1 = new \PHPCourse\ex1\BinarySum();
        $actual = $check1->binarySum('111', 100);
        $expected = '1011';
        self::assertEquals($expected, $actual);
    }
}
