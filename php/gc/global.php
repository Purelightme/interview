<?php

//参考：https://segmentfault.com/q/1010000007244617
//
//function test_global() {
//    global $vars;
//    $vars='OK';
//}
//
//test_global();
//echo $vars;      //OK


//$var1 = 1;
//function test(){
//    global $var1;      // $val1 = &$GLOBALS['var1'] !!!这个很重要
////    unset($GLOBALS['var1']);
//    unset($var1);
//    echo $var1;
//}
//test();
//echo $var1;


//$a=1;
//$b=2;
//$c=[$a,$b];
//var_dump($GLOBALS);


//function test() {
//    global $a; // $a = &$GLOBALS['a']
//    $a = 10;
//    unset($a);
//}
//$a = 1;
//test();
//print $a; // 10

function test_global() {
    global $var1, $var2;  //$var1 = &$GLOBALS['var1'], $var2 = &$GLOBALS['var2']
    $var2 = &$var1;       //......操作的是外部变量的"代号"
}
function test_globals() {
    $GLOBALS['var3'] = &$GLOBALS['var1']; //操作的是外部变量本身
}
$var1 = 1;
$var2 = 2;
$var3 = 3;
test_global();
print $var2 ."\n";      //2 ????
test_globals();
print $var3 ."\n";      //1
print $var1."\n";       //1

$a = 12;
$b = &$a;
$c = &$b;
//var_dump($c);
var_dump($c === $b); //true