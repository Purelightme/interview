<?php
// 不用dirname，basename获取url中的文件路径和文件名
$url = '/w/a/b/c/index.php';
$pos = strrpos($url,'/');
echo $pos."\n";
echo substr($url,$pos + 1)."\n";
echo substr($url,0,$pos)."\n";

// 将08/26/2003 转换成 2003/08/26
$date = '08/26/2003';
echo preg_replace('/(\d+)\/(\d+)\/(\d+)/','$3/$1/$2',$date)."\n";

$time = strtotime($date);
echo date('Y/m/d',$time)."\n";