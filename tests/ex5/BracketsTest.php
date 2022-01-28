<?php

namespace PHPCourse\ex5;

use PHPUnit\Framework\TestCase;

class BracketsTest extends TestCase
{
    /**
     * @dataProvider bracketsProvider
     * @return       void
     */
    public function testBrackets($input, $expected): void
    {
        //$check = new PHPCourse\ex5\Brackets();
        //self::assertEquals((int)$check->isBalanced($input), $expected);
        self::assertEquals((int)(new Brackets())->isBalanced($input), $expected);
    }

    public function bracketsProvider(): array
    {
        return [
            ['(()())(())())', '0'],
            ['((()())())', '1'],
            [')(', '0'],
            ['', '1'],
            ['((())', '0'],
            ['(())', '1'],
        ];
    }
}
