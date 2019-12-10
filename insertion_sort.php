<?php
function insertionSort($arr){
    $num = count($arr);
    if($num<=1){
        return $num;
    }
    for($i=1;$i<$num;$i++){
        $value = $arr[$i];
        for($j = $i-1;$j>=0;$j--){
            if($arr[$j] > $value ){
                $arr[$j+1] = $arr[$j];
            }else{
                break;
            }
            $arr[$j] = $value;
        }
    }
    return $arr;
}
print_r(insertionSort([4,6,1,3,2,8]));