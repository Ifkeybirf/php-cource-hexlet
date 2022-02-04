<?php

namespace ex5;

use PHPUnit\Framework\TestCase;

class BracketsTest extends TestCase
{
    /**
     * @dataProvider bracketsProvider
     */
    public function testBrackets(string $input, bool $expected): void
    {
        self::assertEquals((new \PHPCourse\ex5\Brackets())->isBalanced($input), $expected);
    }

    public function bracketsProvider(): array
    {
        return [
            ['(()())(())())', false],
            ['((()())())', true],
            [')(', false],
            ['', true],
            ['((())', false],
            ['(())', true],
        ];
    }
}
