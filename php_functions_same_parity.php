<?php

function getSameParity($numbers)
{
    if (empty($numbers)) {
        return $numbers;
    }

    $result = [];
    $parity = abs($numbers[0]) % 2;
    foreach ($numbers as $number) {
        if (abs($number) % 2 == $parity) {
            $result[] = $number;
        }
    }
    return $result;
}

print_r(getSameParity([2, 0, 1, 4, -3, 10, -2]));