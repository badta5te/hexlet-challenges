<?php

function getChunked($array, $size)
{
    $result = [];
    $arraySize = sizeof($array);
    $startOfSlice = 0;

    for ($startOfSlice; $startOfSlice < $arraySize; $startOfSlice += $size) {
        $result[] = array_slice($array, $startOfSlice, $size);
    }
    return $result;
}


print_r(getChunked(['a', 'b', 'c', 'd'], 2));
print_r(getChunked(['a', 'b', 'c', 'd'], 3));
print_r(getChunked(['a', 'b', 'c', 'd', 'e', 'f'], 2));