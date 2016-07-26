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
 * @param $size 存放文件夹的大小
 * @return mixed 文件夹的大小
 */
function fileTraversal($dir, $number, &$arr, $size){
    $d = opendir($dir);

    while (($content = readdir($d)) != false) {
        if ($content != '.' && $content != '..') {
            $path = $dir . "/" . $content;

            $contentExactly = new File();
            $contentExactly->setName($content);
            $contentExactly->setBlankNumber($number+1);
            $contentExactly->setModifyTime(date("F d Y H:i:s.", filemtime($path)));

            if (is_dir($path)) {
                $arr[$path] = $contentExactly;
                $size += fileTraversal($path, $number + 1, $arr, 0);
            }else{
                $contentExactly->setSize(filesize($path));
                $arr[$path] = $contentExactly;
                $size += $contentExactly->getSize(filesize($path));
            }
        }
    }
    $arr[$dir]->setSize($size);
    return $size;
}

/**
 * @param $arr 记录遍历得出的各个文件的各个属性
 * 将遍历的文件夹和文件显示出来
 * 没有进行前端显示处理
 */
function show($arr){
    $n = count($arr);
    foreach ($arr as $key => $value){
        $content = '';
        $number = $arr[$key]->getBlankNumber();
        for ($j = 0; $j < $number; $j++){
            $content .= '----';
        }
        $content = $content . $arr[$key]->getName();
        $size = $arr[$key]->getSize();
        $modifyTime = $arr[$key]->getModifyTime();
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
    @opendir($dir) or die("该目录不存在");
    $contentExactly = new File();
    $contentExactly->setName($dir);
    $contentExactly->setBlankNumber(0);

    $arr[$dir] = $contentExactly;
//    array_push($arr, $contentExactly);
    fileTraversal($dir, 0, $arr, 0);

    show($arr);
}


$dir = "/mnt/hgfs/project/learn/fileTraversal/data for test";
main($dir);