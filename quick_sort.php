<?php
function quicksort($arr){
    if(count($arr) < 2){
        return $arr;
    }
    $pivot = $arr[0];
    $less = [];
    $greater = [];
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $pivot) {
            $less[] = $arr[$i];
        } else {
            $greater[] = $arr[$i];
        }
    }
    return array_merge(quicksort($less),[$pivot],quicksort($greater));
}
$test = quicksort([5,10,2,3,6,3,4]);
print_r($test);