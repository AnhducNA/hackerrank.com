<?php

function quickSort($m, $arr)
{
    for ($i = 0; $i <= count($arr) - 2; $i++) {
        for ($j = $i+1; $j <= count($arr) - 1; $j++) {
            if ($i == $j) {
                continue;
            } else {
                if($arr[$i]+$arr[$j] == $m){
                    echo ($i+1).' '. ($j+1);
                    printf("\n");
                }
            }
        }
    }
}

$m = 5;
$arr = [1, 4, 5, 3, 2];
quickSort($m, $arr);