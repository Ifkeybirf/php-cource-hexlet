<?php

namespace PHPCourseTest\ex8;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider fizBuzProvider
     */
    public function testFizBuz(string $exp, int $begin, int $end): void
    {
        self::assertEquals($exp, (new \PHPCourse\ex8\FizzBuzz())->fizzBuzzCalc($begin, $end));
    }

    public function fizBuzProvider(): array
    {
        return [
            ['11 Fizz 13', 11, 13],
            ['11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz', 11, 20],
            ['', 13, 11],
        ];
    }
}
