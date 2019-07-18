<?php

function compareVersion($version1, $version2)
{
    $data1 = explode(".", $version1);
    $data2 = explode(".", $version2);

    if ($data1[0] > $data2[0]) {
        return 1;
    } elseif ($data1[0] === $data2[0]) {
        if ($data1[1] > $data2[1]) {
            return 1;
        } elseif ($data1[1] === $data2[1]) {
            return 0;
        } else {
            return -1;
        }
    } else {
        return -1;
    }
}

print_r(compareVersion("0.1", "0.2")); // → -1
//print_r(compareVersion("0.2", "0.1")); // → 1
//print_r(compareVersion("4.2", "4.2")); // → 0