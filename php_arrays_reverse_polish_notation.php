<?php

function calcInPolishNotation($expression)
{
    $stack = [];
    
    $sum = function ($a, $b) {
        return $a + $b;
    };
    
    $sub = function ($a, $b) {
        return $a - $b;
    };

    $multiplication = function ($a, $b) {
        return $a * $b;
    };

    $division = function ($a, $b) {
        return $a / $b;
    };

    foreach ($expression as $char) {
        if (is_int($char)) {
            $stack[] = $char;
        } elseif ($char === '+') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $stack[] = $sum($a, $b);
        } elseif ($char === '-') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $stack[] = $sub($a, $b);
        } elseif ($char === '*') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $stack[] = $multiplication($a, $b);
        } elseif ($char === '/') {
            $b = array_pop($stack);
            $a = array_pop($stack);
            $stack[] = $division($a, $b);
        }
    }
    return $stack[0];
}

print_r(calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));//->15
print_r(calcInPolishNotation([7, 2, 3, '*', '-']));//->1
