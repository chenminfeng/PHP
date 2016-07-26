<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/26
 * Time: 14:13
 */

include "File.php";

/**
 * @param $dir 遍历的文件路径
 * @param $number 记录该dir的缩进格式
 * @param $arr 存放各个文件的各个属性的对象
 */
function fileTraversal($dir, $number, &$arr){
    $d = opendir($dir);

    while (($content = readdir($d)) != false) {
        if ($content != '.' && $content != '..') {
            $path = $dir . "/" . $content;

            $contentExactly = new File();
            $contentExactly->setName($content);
            $contentExactly->setBlankNumber($number+1);

            if (is_dir($path)) {
                array_push($arr, $contentExactly);
                fileTraversal($path, $number + 1, $arr);
            }else{
                $contentExactly->setModifyTime(date("F d Y H:i:s.", filemtime($path)));
                $contentExactly->setSize(filesize($path));
                array_push($arr, $contentExactly);
            }
        }
    }
}

/**
 * @param $arr 记录遍历得出的各个文件的各个属性
 * 将遍历的文件夹和文件显示出来
 * 没有进行前端显示处理
 */
function show($arr){
    $n = count($arr);
    for ($i = 0; $i < $n; $i++){
        $content = '';
        $number = $arr[$i]->getBlankNumber();
        for ($j = 0; $j < $number; $j++){
            $content .= '----';
        }
        $content = $content . $arr[$i]->getName();
        $size = '';
        $modifyTime = 'NULL';
        if ($arr[$i]->getSize() != ""){
            $size = $arr[$i]->getSize();
            $modifyTime = $arr[$i]->getModifyTime();
        }
        echo "$content" ."  modifyTime : $modifyTime" .  "  size : $size" . 'B<br/>';
    }
}

/**
 * @param $dir 遍历的文件路径
 * 执行程序
 */
function main($dir){
    $arr = [];
    $dir = "/mnt/hgfs/project/learn/fileTraversal/data for test";
    $contentExactly = new File();
    $contentExactly->setName($dir);
    $contentExactly->setBlankNumber(0);

    array_push($arr, $contentExactly);
    fileTraversal($dir, 0, $arr);

    show($arr);
}


$dir = "/mnt/hgfs/project/learn/fileTraversal/data for test";
main($dir);