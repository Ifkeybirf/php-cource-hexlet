<?php

namespace ex7;

use PHPCourse\ex7\HappyTicket;
use PHPUnit\Framework\TestCase;

class HappyTicketTest extends TestCase
{
    /**
     * @dataProvider happyTicketProvider
     */
    public function testHappyTicket(bool $exp, string $num): void
    {
        $check = HappyTicket::getInstance();
        $real = $check->isHappy($num);
        self::assertEquals($exp, $real);
    }

    public function happyTicketProvider(): array
    {
        return [
            [true, '1230'],
            [false, '1130'],
            [true, '054702'],
            [false, '01'],
        ];
    }

    /**
     * @dataProvider      happyTicketWrongProvider
     */
    public function testHappyTicketWrong(string $num): void
    {
        $check = HappyTicket::getInstance();
        $this->expectException(\InvalidArgumentException::class);
        $check->isHappy($num);
    }

    public function happyTicketWrongProvider(): array
    {
        return [
            ['321'],
            ['2a']
        ];
    }
}
