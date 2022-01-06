<?php

function isBalanced(string $input): bool
{
    $count = 0;
    for ($qq = 0; $qq < strlen($input); $qq++) {
        print "input[$qq]= $input[$qq]\n";

        switch ($input[$qq]) {
            case '(':
            {
                $count += 1;
                break;
            }
            case ')':
            {
                $count -= 1;
                break;
            }
        }
    }
    if ($count < 0) {
        return false;
    }
    return $count === 0;
}

var_dump(isBalanced('(()())(())())'));
