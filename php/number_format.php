<?php


// 1234567890 => 1,234,567,890

//方法1
$number = 1234567890;
echo number_format($number)."\n";

//方法2
$rev = strrev($number);
$arr = str_split($rev,3);
echo strrev(implode(',',$arr))."\n";