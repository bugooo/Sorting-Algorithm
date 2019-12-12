<?php
function shellSort($arr) {
    $len = count($arr);
    for ($gap = floor($len/2);$gap > 0; $gap = floor($gap / 2)) {
        for ($i = $gap; $i < $len; $i++) {
            $j = $i;
            $current = $arr[$i];
            while ($j - $gap >= 0 && $current < $arr[$j - $gap]) {
                $arr[$j] = $arr[$j - $gap];
                $j = $j - $gap;
            }
            $arr[$j] = $current;
        }
    }
    return $arr;
}
print_r(shellSort([8,9,1,7,3,5,4,6,0]));