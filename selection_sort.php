<?php
function selectionSort($arr){
    $newArr = [];
    $len = count($arr);
    for($j = 0;$j < $len;$j++){
        $smallest_index = findSmallest($arr);
        //取出最小的元素值并从数组中删除，数组的键重排
        $newArr[] = $arr[$smallest_index];
        unset($arr[$smallest_index]);
        $arr = array_values($arr);
    }
    return $newArr;
}
function findSmallest($arr){
    $smallest = $arr[0];
    $smallest_index = 0;
    for($i = 1;$i < count($arr);$i++){
        if($arr[$i] < $smallest){
            $smallest = $arr[$i];
            $smallest_index = $i;
        }
    }
    return $smallest_index;
}


$test = selectionSort([5,3,6,2,10]);
print_r($test);