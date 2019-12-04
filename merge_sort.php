<?php
function mergeSort($arr) {
    $len = count($arr);
    if($len < 2){
        return $arr;
    }
    $middle = $len>>1;
    $newArr = array_chunk($arr,$middle);
    $A = mergeSort($newArr[0]);
    $B = mergeSort($newArr[1]);
    return merge($A,$B);

}

function merge($arr_A,$arr_B) {
    $len_A = count($arr_A);
    $len_B = count($arr_B);
    $i=0;
    $j=0;
    $tmp = [];
    while($i<$len_A && $j<$len_B){
        if ($arr_A[$i] < $arr_B[$j]) {
            $tmp[] = $arr_A[$i];
            $i++;
        } else {
            $tmp[] = $arr_B[$j];
            $j++;
        }
    }
    if($i<$len_A){
        $tmp = array_merge($tmp,array_slice($arr_A,$i));

    }
    if($j<$len_B){
        $tmp = array_merge($tmp,array_slice($arr_B,$j));
    }
    return $tmp;
}


$arr = [11,8,3,9,7,1,2,5];
print_r(mergeSort($arr));