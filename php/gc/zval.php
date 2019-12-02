<?php

//$str1 = 'hello,world';
//$str2 = &$str1;
//$str3 = &$str1;
//$str2 .= '2';
//$str3 .= '3';
//$str4  = &$str1;
//$str4 .= '4';
//debug_zval_dump($str1);


$var1 = 'Hello World';
$var2 = '';

$var2 =& $var1;
$s = &$var1;
debug_zval_dump($s);