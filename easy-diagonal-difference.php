<?php

function diagonalDifference($arr)
{
    $countArr = count($arr);
    $principal_diagonal_sum = 0;
    $second_diagonal_sum = 0;
    foreach ($arr as $key => $sub_arr) {
        $sub_countArr = count($sub_arr);
        if($countArr != $sub_countArr){
            throw new Exception('Array index count mismatched. This is not square array.');
        }else{
            $principal_diagonal_sum += $sub_arr[$key];
            $second_diagonal_sum += $sub_arr[$countArr-$key-1];
        }
    }
    return abs($principal_diagonal_sum - $second_diagonal_sum);
}

$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [9, 8, 9]
];
echo diagonalDifference($arr);