
function bubble_sort($arr)
{
    $len = count($arr);
    if ($len < 2) {
        return $arr;
    }
    for ($i = 0; $i < $len; $i++) {
        //提前推出冒泡循环的标志位
        $flag = false;
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                //交换
                $tmp = $arr[$j + 1];
                $arr[$j + 1] = $arr[$j];
                $arr[$j] = $tmp;
                $flag = true;
            }
        }
        if ($flag == false) {
            break;
        }
    }
    return $arr;
}

$arr = [1, 3, 5, 4, 7, 6, 9, 0];
print_r(bubble_sort($arr));