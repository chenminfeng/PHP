<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/25
 * Time: 9:56
 */
function selectionSort($arr){
    $n = count($arr);
    for($i = 0; $i < $n; $i++){
        $minIndex = $i;
        for($j = $i; $j < $n; $j ++){
            if($arr[$j] < $arr[$minIndex]){
                $minIndex = $j;
            }
        }
        $tmp = $arr[$minIndex];
        $arr[$minIndex] = $arr[$i];
        $arr[$i] = $tmp;
    }
    return $arr;
}

$arr = [40,81,25,38,85,31,62,21,43,79];
$n = count($arr);
$arr = selectionSort($arr);

for($i = 0; $i < $n; $i++){
    echo $arr[$i] . ' ';
}