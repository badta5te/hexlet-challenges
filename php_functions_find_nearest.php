<?php

function findIndexOfNearest($array, $value)
{
    if (empty($array)) {
        return null;
    }

    if (sizeof($array) < 2) {
        return $value;
    }
    
    $minimalValue = $array[0];
    $result = [];
    foreach ($array as $index => $number) {
        if (abs($value) - abs($number) < $minimalValue) {
            $result[0] = [$index => $number];
            $minimalValue = $number;
            print_r($result);
        }
    }
    return key($result[0]);
}

print_r(findIndexOfNearest([15, 10, 3, -5], -2));