<?php

function quickSort($arr)
{
    $pivot_value = array_shift($arr);
    $lesser = $greater = [];
    for($i=0;$i<count($arr);$i++){
        if($pivot_value>$arr[$i]){
            $lesser[]=$arr[$i];
        } else if($pivot_value<$arr[$i]){
            $greater[]=$arr[$i];
        }
    }
  print_r(array_merge($lesser, array($pivot_value), $greater));
}

$arr = [4, 1, 3, 5, 6, 2];
(quickSort($arr));