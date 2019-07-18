<?php

function addDigits($number)
{
    
    $string = (string) $number;

    while (strlen($string) > 1) {

        $result = 0;

        for ($i = 0; $i < strlen($string); $i++) {
            $curChar = $string[$i];
            $result += (int) $curChar;
        }

        $string = (string) $result;
    }
    return $string;
}

print_r(addDigits(38));