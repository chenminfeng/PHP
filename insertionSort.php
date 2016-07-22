<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/22
 * Time: 11:53
 */

function insertionSort(array $arr){
    $n = count($arr);
    for($i = 1; $i < $n; $i++){
        $j = $i - 1;
        while($j >= 0 && $arr[$j] > $arr[$j+1]){
            $tmp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $tmp;
            $j--;
        }
    }
    return $arr;
}

$arr = [1, 8, 6, 3, 5, 7, 15,-1, 5, 7, 111, 999, 58];
$n = count($arr);
$arr = insertionSort($arr);

for($i = 0; $i < $n; $i++){
    echo $arr[$i] . ' ';
}
