<?php

function getSameParity($numbers)
{
    if (empty($numbers)) {
        return $numbers;
    }

    $result = [];
    $parity = abs($numbers[0]) % 2;
    print_r($parity);
    foreach ($numbers as $number) {
        if (abs($number) % 2 == $parity) {
            $result[] = $number;
            print_r($result);
        }
    }
    return $result;
}

print_r(getSameParity([-1, 0, 1, -3, 10, -2]));