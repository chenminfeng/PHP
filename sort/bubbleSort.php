<?php
/** 
 * Created by PhpStorm.
 * User: chenminfeng 
 * Date: 2016/7/22 
 * Time: 15:49
 *
 * 优化的冒泡排序
 * 假如50个数进行排序，排序过程发现后面40个数已经排序好，且均大于前面10个数，则只对前面10个数进行排序。
 * @param $arr
 */
function bubbleSort($arr){
    $notChangeIndex = count($arr) - 1;      //从该下标开始，后面的数不再发生交换
    while($notChangeIndex != 0) {
        $times = $notChangeIndex;
        $notChangeIndex = 0;
        for ($i = 0; $i < $times;$i++){
            if($arr[$i] > $arr[$i+1]){
                $tmp = $arr[$i + 1];
                $arr[$i+1] = $arr[$i];
                $arr[$i] = $tmp;
                $notChangeIndex = $i + 1;
            }
        }
    }
    return $arr;
}

$arr = [40,81,25,38,85,31,62,21,43,79];
$n = count($arr);
$arr = bubbleSort($arr);

for($i = 0; $i < $n; $i++){
    echo $arr[$i] . ' ';
}
