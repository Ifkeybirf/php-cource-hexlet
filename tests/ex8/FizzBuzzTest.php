<?php

namespace PHPCourse\ex8;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider fizBuzProvider
     * return        void
     */

    public function testFizBuz($begin, $end, $exp): void
    {
        self::assertStringMatchesFormat((new FizzBuzz())->fizzBuzz($begin,$end), $exp);
    }

    public function fizBuzProvider(): array
    {
        return [
            ['11', '13', '11 Fizz 13 '],
            ['11', '20', '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz '],
            ];
    }
}
