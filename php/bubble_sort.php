<?php

//冒泡排序
function bubble_sort($arr){
    $length = count($arr);
    if ($length <= 1){
        return $length;
    }
    for ($i = 0;$i < $length;$i++){
        for ($j = 0;$j < $length - 1;$j++){
            if ($arr[$j] > $arr[$j+1]){
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j+1] = $tmp;
            }
        }
    }
    return $arr;
}

$arr = [2,5,3,1,10];
var_dump(bubble_sort($arr));