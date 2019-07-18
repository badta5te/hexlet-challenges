<?php

function toRna($DNA)
{
    $compilence = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U'];

    $result = [];
    for ($i = 0; $i < strlen($DNA); $i++) {
        $result[] = $compilence[$DNA[$i]];
        //print_r($result);
    }
    return implode('', $result);
}

print_r(toRna('ACGTGGTCTTAA'));