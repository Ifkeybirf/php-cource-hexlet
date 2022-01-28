<?php

function isBalanced(string $input): bool
{
    $count = 0;
    $lengthInput = strlen($input);
    for ($qq = 0; $qq < $lengthInput; $qq++) {
        if ($input[$qq] === '(') {
            $count++;
        } elseif ($input[$qq] === ')') {
            $count--;
        }

        if ($count < 0) {
            return false;
        }
    }
    return $count === 0;
}

var_dump(isBalanced('(()())(())())'));
