<?php
/**
 * This is one of test tasks from Code Moc interview.
 * I did not pass it in time but decided to finish, just for myself.
 *
 * PHP version 7.4
 *
 * @category Samples
 * @package  PowerOf2
 * @author   Ifkey Ifkeyjd <ifkeybirf@hotmail.com>
 * @license  https://opensource.org/licenses/gpl-2.0.php GPLv2
 * @link     http://github.com/ifkeybirf
 */

namespace PHPCourse\ex2a

class PowerOf2
{
    /**
     * Mein func checking is entered digit is power of 2 or not
     *
     * @param integer $n value for checking
     *
     * @return Boolean
     */
    function isPowerOfTwo($n)
    {
        if ($n < 0) {
            return false;
        }
        if ($n === 1) {
            return true;
        }
        if ($n === 2) {
            return true;
        }
        if (($n % 2) != 0) {
            return false;
        }

        $res = 1;
        for ($qq = 1; $qq < 31; $qq++) {
            $res = $res * 2;

            if ($res > $n) {
                return false;
            }
            if (($n === $res)) {
                return true;
            }
        }
        return false;
    }
}
