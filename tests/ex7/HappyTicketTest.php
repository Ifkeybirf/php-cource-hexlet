<?php

use PHPUnit\Framework\TestCase;

class HappyTicketTest extends TestCase
{
    /**
     * @dataProvider happyTicketProvider
     */

    public function testHappyTicket($exp, $num): void
    {
        $check = new \PHPCourse\ex7\HappyTicket();
        $real = (int)$check->isHappy($num);
        self::assertEquals($exp, $real);
    }

    function happyTicketProvider(): array
    {
        return [
            ['1', '1230'],
            ['0', '1130'],
            ['1', '054702'],
            ['0', '01'],
        ];
    }

    /**
     * @dataProvider      happyTicketWrongProvider
     * @return            array
     * @expectedException \InvalidArgumentException
     */

    public function testHappyTicketWrong($num)
    {
        $check = new \PHPCourse\ex7\HappyTicket();
        $this->expectException(\InvalidArgumentException::class);
        $check->isHappy($num);
    }

    function happyTicketWrongProvider(): array
    {
        return [
            ['321'],
            ['2a']
        ];
    }
}
