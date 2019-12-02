<?php

//gc---循环引用
//10000个buffer满之后，触发垃圾回收，这个算法很慢

class A{
    public $a;
}

//echo ini_get('memory_limit'); 128M
//gc_disable(); //开启导致内存峰值变高，可能报内存溢出，
//PHP Fatal error:  Allowed memory size of 134217728 bytes exhausted (tried to allocate 4096 bytes) in /Users/purelightme/Desktop/interview/php/gc/index.php on line 15

function foo(){
    $i = 10000000;
    while ($i--){
        $a = new A();
        $a->a = $a;//循环引用
        unset($a);
    }
}

function bar(){
    $i = 10000000;
    while ($i--){
        $a = new A();
        $GLOBALS[] = $a;//无用gc
    }
}

//foo();
bar(); //直接报内存溢出

