<?php

function calcInPolishNotation($expression)
{
    $stack = [];
    function sum($a, $b)
    {
        return $a + $b;
    }

    function subtraction($a, $b)
    {
        return $a - $b;
    }

    function multiplication($a, $b)
    {
        return $a * $b;
    }

    function division($a, $b)
    {
        return $a / $b;
    }

    foreach ($expression as $char) {
        if (is_int($char)) {
            $stack[] = $char;
        } elseif ($char === '+') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $sum = sum($a, $b);
            $stack[] = $sum;
        } elseif ($char === '-') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $sub = subtraction($a, $b);
            $stack[] = $sub;
        } elseif ($char === '*') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $multiplication = multiplication($a, $b);
            $stack[] = $multiplication;
        } elseif ($char === '/') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $division = division($a, $b);
            $stack[] = $division;
        }
    }
    return $stack[0];
}

print_r(calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));//->15
print_r(calcInPolishNotation([7, 2, 3, '*', '-']));//->1