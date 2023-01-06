<?php

function bigSorting($unsorted)
{
    $lesser = $greater = [];
    if (count($unsorted) < 2) {
        return $unsorted;
    }
    $pivot_key = key($unsorted);
    $pivot_value  = array_shift($unsorted);
    foreach ($unsorted as $value){
        if($pivot_value >= $value){
            $lesser[] = $value;
        } else{
            $greater[] = $value;
        }
    }
    $sorted = array_merge(bigSorting($lesser),array($pivot_key=>$pivot_value), bigSorting($greater));
//    $sorted = array_merge(bigSorting($lesser),array($pivot_value), bigSorting($greater));

    // Write your code here
    return $sorted;
}

$unsorted = [8, 1, 2, 100, 12303479849857341718340192371, 3084193741082937, 3084193741082938, 111, 200];
var_dump(bigSorting($unsorted));