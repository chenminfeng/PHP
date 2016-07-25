<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/21
 * Time: 17:15
 */

function quickSort(array &$arr, $left, $right){
    $tmp = $right;
    $i = $left;
    while ($i < $tmp){
        if ($arr[$i] > $arr[$tmp]){
            $x = $arr[$tmp];
            $arr[$tmp] = $arr[$i];
            $arr[$i] = $arr[$tmp-1];
            $arr[$tmp-1] = $x;

            $tmp--;
        }else{
            $i ++;
        }
    }
    if ($tmp < $right - 1){
        $arr = quickSort($arr, $tmp+1, $right);
    }
    if ($tmp > $left + 1){
        $arr = quickSort($arr, $left, $tmp-1);
    }
    return $arr;
}

$arr = [1, 8, 6, 3, 5, 7, 15,-1, 5, 7, 111, 999, 58];
$n = count($arr);
$arr = quickSort($arr, 0, $n-1);

for($i = 0; $i < $n; $i++){
    echo $arr[$i] . ' ';
}

