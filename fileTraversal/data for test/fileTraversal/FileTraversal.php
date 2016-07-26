<?php
/**
 * Created by PhpStorm.
 * User: chenminfeng
 * Date: 2016/7/26
 * Time: 14:13
 */

include "File.php";



function fileTraversal($dir, $number, &$arr){
    $blank = '    ';

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
                $contentExactly->setModifyTime(date(filemtime($path)));
                $contentExactly->setSize(filesize($path));
                array_push($arr, $contentExactly);
            }
        }
    }
}

static $arr = [];
$dir = "/mnt/hgfs/project/learn";
$contentExactly = new File();
$contentExactly->setName($dir);
$contentExactly->setBlankNumber(0);

array_push($arr, $contentExactly);
fileTraversal($dir, 0, $arr);


$n = count($arr);
for ($i = 0; $i < $n; $i++){
    $content = '';
    $number = $arr[$i]->getBlankNumber();
    for ($j = 0; $j < $number; $j++){
        $content .= '----';
    }
    $content = $content . $arr[$i]->getName();
    $size = '0';
    $modifyTime = 'NULL';
    if ($arr[$i]->getSize() == ""){
        $size = $arr[$i]->getSize();
        $modifyTime = $arr[$i]->getModifyTime();
    }
    echo "$content" ."  modifyTime : $modifyTime" .  "  size : $size" . 'B<br/>';
}

