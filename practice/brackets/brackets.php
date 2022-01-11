<?php

function isBalanced(string $input): bool
{
    $count = 0;
    $lengthInput = strlen($input);
    for ($qq = 0; $qq < $lengthInput; $qq++) {
        switch ($input[$qq]) {
            case '(':
                $count++;
                break;
            case ')':
                $count--;
                break;
        }
    }
    if ($count < 0) {
        return false;
    }
    return $count === 0;
}

var_dump(isBalanced('(()())(())())'));
