<?php

//扫描目录
//filetype返回值：fifo，char，dir，block，link，file 和 unknown

function loopDir($dir){
    $handler = opendir($dir);
    while (false !== ($file = readdir($handler))){
        if ($file != '.' && $file != '..'){
            if (filetype($dir.DIRECTORY_SEPARATOR.$file) == 'dir'){
                loopDir($dir.DIRECTORY_SEPARATOR.$file);
            }else{
                echo $dir.DIRECTORY_SEPARATOR.$file."\n";
            }
        }
    }
}

function loopDir3($dir){
    $dirs = scandir($dir);
    foreach ($dirs as $path){
        if ($path != '.' && $path != '..'){
            $file = $dir.DIRECTORY_SEPARATOR.$path;
            if (is_dir($file)){
                loopDir3($file);
            }else{
                echo $file."\n";
            }
        }
    }
}

$dir = __DIR__;
loopDir($dir);
echo ">>>>>>>>>>>>>\n";
loopDir3($dir);