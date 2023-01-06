<?php

function insertionSort2($n, $arr)
{
    $temp = 0;
    for ($num = 1; $num <= $n - 1; $num++) {
        for ($idx = 0; $idx <= $num - 1; $idx++) {
            if ($arr[$idx] > $arr[$num]) {
                $temp = $arr[$num];
                $arr[$num] = $arr[$idx];
                $arr[$idx] = $temp;
            }
        }
            echo implode(' ', $arr);
            printf("\n");
    }
    return $arr;
}

$n = 8;
$arr = [8, 7, 6, 5, 4, 3, 2, 1];
(insertionSort2($n, $arr));