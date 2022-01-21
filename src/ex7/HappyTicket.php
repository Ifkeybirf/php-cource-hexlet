<?php

namespace PHPCourse\ex7;

class HappyTicket
{
    public function randomTicketNumber(int $cnt)
    {
        if ($cnt % 2 !== 0) {
            print_r('the number of digits must be even' . PHP_EOL);
            return 0;
        }

        $txt = '';
        for ($qq = 1; $qq <= $cnt; $qq++) {
            $tmp = random_int(0, 9);
            $txt .= $tmp;
        }
        return $txt;
    }

    public function isHappy(string $ticketNumber): bool
    {
        if (!is_numeric($ticketNumber)) {
            throw new \InvalidArgumentException('the ticket number must contain only digits');
        }
        $ticketLen = strlen($ticketNumber);
        /*
         * even ticketLen used only twice in code below
         * I decided that it is better than count strlen 3 times or more with code below
         *
         * additionally I'm not sure how to better collapse two 'if' below
         */
        if ($ticketLen % 2 !== 0) {
            throw new \InvalidArgumentException('the number of digits must be even');
        }

        $lSum = $rSum = 0;
        for ($qq = 0; $qq < $ticketLen / 2; $qq++) {
            $lSum += (int)$ticketNumber[$qq];
            $rSum += (int)$ticketNumber[$qq + $ticketLen / 2];
        }

        /*
         * I did not use construction below
         * return $lSum === $rSum && $halfNum > 1;
         * because in this case we'll continue try to count lSum & rSum even halfNum < 1
         * however, this is the reason to return that ticket is unhappy without additional calculations.
         */
        return $lSum === $rSum;
    }
}
