<?php

function summaryRanges($numbers)
{
    $result = [];
    $summary = '';

    for ($i = 1; $i < sizeof($numbers); $i++) {
        if ($numbers[$i] === ($numbers[$i - 1] + 1) && $numbers[$i] !== end($numbers)) {
            if (empty($summary)) {
                $summary .= $numbers[$i - 1];
            }
        } elseif ($numbers[$i] !== $numbers[$i - 1] + 1) {
            if (!empty($summary)) {
                $summary .= "->{$numbers[$i - 1]}";
                $result[] = $summary;
                $summary = '';
            }
        } elseif ($numbers[$i] === end($numbers)) {
            if (!empty($summary)) {
                $summary .= "->{$numbers[$i]}";
                $result[] = $summary;
                $summary = '';
            } 
        }
    }
    print_r($result);
}

print_r(summaryRanges([])); //[]
print_r(summaryRanges([1, 2, 3]));//["1->3"]
print_r(summaryRanges([0, 1, 2, 4, 5, 7]));//["0->2", "4->5"]
print_r(summaryRanges([1, 1, 3, 4, 5, -6, 8, 9, 10, 12, 14, 14]));//['3->5', '8->10']
print_r(summaryRanges([110, 111, 112, 111, -5, -4, -2, -3, -4, -5]));//['110->112', '-5->-4']