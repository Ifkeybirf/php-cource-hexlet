<?php

namespace PHPCourseTest\ex7;

use PHPCourse\ex7\HappyTicket;
use PHPCourse\Logger\LoggerFake;

class HappyTicketTest extends \PHPUnit\Framework\TestCase
{
    private LoggerFake $logger;

    public function setUp(): void
    {
        parent::setUp();
        $this->logger = new LoggerFake();
    }

    /**
     * @dataProvider happyTicketProvider
     */
    public function testHappyTicket(bool $exp, string $num): void
    {
        $check = new HappyTicket($this->logger);
        $actual = $check->isHappy($num);
        self::assertEquals($exp, $actual);
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
     * @dataProvider happyTicketWrongProvider
     */
    public function testHappyTicketWrong(string $num): void
    {
        $check = new HappyTicket($this->logger);
        $this->expectException(\InvalidArgumentException::class);

        try {
            $check->isHappy($num);
        } catch (\InvalidArgumentException $e) {
            $exceptMsg = $e->getMessage();

            $realLogMsg = $this->logger->getLastMsg();
            self::assertEquals($exceptMsg, $realLogMsg);
            throw $e;
        }
    }

    public function happyTicketWrongProvider(): array
    {
        return [
            ['321'],
            ['2a'],
        ];
    }
}
