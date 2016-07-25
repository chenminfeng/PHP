<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/22
 * Time: 14:16
 */
function mergeSort(array $arr, $left, $right){
    if($left == $right){
        return $arr;
    }
    $mid = floor(($left + $right)/2);       //向下取整

    $arr = mergeSort($arr, $left, $mid);
    $arr = mergeSort($arr, $mid+1, $right);

    //归并过程
    $tmp = [];
    $i = $left;
    $j = $mid+1;
    while($i <= $mid || $j <= $right){
        if ($i > $mid) {
            array_push($tmp, $arr[$j]);
            $j ++;
        }elseif($j > $right){
            array_push($tmp, $arr[$i]);
            $i ++;
        }else{
            if($arr[$i] <= $arr[$j]){
                array_push($tmp, $arr[$i]);
                $i ++;
            }else{
                array_push($tmp, $arr[$j]);
                $j ++;
            }
        }
    }
    for ($i = $left; $i <= $right; $i++){
        $arr[$i] = $tmp[($i - $left)];
    }

    return $arr;
}


$arr = [1, 8, 6, 3, 5, 7, 15,-1, 5, 7, 111, 999, 58];
$n = count($arr);
$arr = mergeSort($arr, 0, $n-1);

echo "<br/>";
for($i = 0; $i < $n; $i++){
    echo $arr[$i] . ' ';
}

