<?php

function insertionSort2($n, $arr)
{
    for($i=1;$i<count($arr);$i++){
        $val= $arr[$i];
        $j = $i-1;
        while($j>=0 && $arr[$j] > $val){
            $arr[$j+1] = $arr[$j];
            $arr[$j] = $val;
            $j--;
        }
    }
    echo implode(' ', $arr);
    printf("\n");
}

$n = 6;
$arr = [4, 1, 3, 5, 6, 2];
(insertionSort2($n, $arr));