<?php

function diagonalDifference($arr) {
    $d_ar = [];
    $main_len = count($arr);

    foreach($arr as $key => $ar) {
        $sub_len = count($ar);
        if($main_len != $sub_len) {
            throw new Exception('Array index count mismatched. Hence this is not square array.');
        }
        $d_ar[0][] = $ar[$key];
        $d_ar[1][] = $ar[($main_len-$key-1)];
    }
    return abs((array_sum($d_ar[0]) - array_sum($d_ar[1])));
}
$arr = [
    [1,2,3],
    [4,5,6],
    [9,8,9]
];
echo diagonalDifference($arr);