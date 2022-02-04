<?php

namespace ex8;

class FizzBuzzTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @dataProvider fizBuzProvider
     */
    public function testFizBuz(int $begin, int $end, string $exp): void
    {
        self::assertStringMatchesFormat((new \PHPCourse\ex8\FizzBuzz())->fizzBuzzCalc($begin, $end), $exp);
    }

    public function fizBuzProvider(): array
    {
        return [
            [11, 13, '11 Fizz 13 '],
            [11, 20, '11 Fizz 13 14 FizzBuzz 16 17 Fizz 19 Buzz '],
            ];
    }
}
