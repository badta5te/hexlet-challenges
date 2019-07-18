<?php

function summaryRanges($numbers)
{
    $result = [];
    $stack = [];

    for ($i = 1; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] === ($numbers[$i - 1] + 1) && $numbers[$i] !== end($numbers)) {
            if (empty($stack)) {
                $stack[] = $numbers[$i - 1];
            }
        } elseif ($numbers[$i] !== $numbers[$i - 1] + 1) {
            if (!empty($stack)) {
                $stack[] = $numbers[$i - 1];
                $max = array_pop($stack);
                $min = array_pop($stack);
                $result[] = "{$min}->{$max}";
            }
        } elseif ($numbers[$i] === end($numbers)) {
            if (!empty($stack)) {
                $min = array_pop($stack);
                $result[] = "{$min}->{$numbers[$i]}";
            } 
        }
    }
    return $result;
}

print_r(summaryRanges([])); //[]
print_r(summaryRanges([1, 2, 3]));//["1->3"]
print_r(summaryRanges([0, 1, 2, 4, 5, 7]));//["0->2", "4->5"]
print_r(summaryRanges([1, 1, 3, 4, 5, -6, 8, 9, 10, 12, 14, 14]));//['3->5', '8->10']
print_r(summaryRanges([110, 111, 112, 111, -5, -4, -2, -3, -4, -5]));//['110->112', '-5->-4']
