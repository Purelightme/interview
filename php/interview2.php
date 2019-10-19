<?php
function loopDir($dir){
    $handler = opendir($dir);
    while (false !== ($file = readdir($handler))){
        if ($file != '.' && $file != '..'){
            if (filetype($dir.DIRECTORY_SEPARATOR.$file) == 'dir'){
                loopDir($dir.DIRECTORY_SEPARATOR.$file);
            }else{
                echo $file."\n";
            }
        }
    }
}
function loopDir2($dir){
    $handle = opendir($dir);
    while(false !==($file =readdir($handle))){
        if($file!='.'&&$file!='..'){
            echo $file."\n";
            if(filetype($dir.'/'.$file)=='dir'){
                loopDir($dir.'/'.$file);
            }
        }
    }
}

$dir = __DIR__.'/flutter/lol_chess/lib/pages';
loopDir2($dir);
echo "=============\n";
loopDir($dir);