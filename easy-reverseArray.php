<?php
function reverseArrayByQueue($arr)
{
    $newQueue = new SplQueue();
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        $newQueue->enqueue($arr[$i]);
    }
    //using rewind() function to bring the file pointer to the beginning of the queue
    $newQueue->rewind();
    $reverseArr = [];
    while ($newQueue->valid()) {
        $reverseArr[] = $newQueue->current();
        $newQueue->next();
    }
//print_r($newQueue);
//$newQueue->dequeue();
//$newQueue->dequeue();
//    print_r ($newQueue);
    return $reverseArr;
}

$result = reverseArrayByQueue([1, 2, 3, 4]);
print_r($result);