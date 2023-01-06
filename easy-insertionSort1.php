<?php

function insertionSort1($n, $arr)
{
    // Write your code here
    $done = 0;
    $value=$arr[$n-1];
    for($idx = $n-2; $idx>=0; $idx--){
        if($value > $arr[$idx]){
            $arr[$idx+1] = $value;
            $done=1;
        }else{
            $arr[$idx+1] = $arr[$idx];
        }
        for ($i=0; $i<$n;$i++){
            echo ($arr[$i].' ');
        }
        echo "\n";
        if($done == 1){
            break;
        }
    }
    if ($done == 0) {
        $arr[0] = $value;
        for ($i = 0; $i < $n; $i++)
            printf("%d ", $arr[$i]);
        printf("\n");
    }
}

$n = 5;
$arr = [1, 5, 4, 5, 6];
print_r(insertionSort1($n, $arr));