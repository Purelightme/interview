<?php

$data = ['a','b','c'];

foreach ($data as $k => $v){
    $v = &$data[$k];
    print_r($data);
}

var_dump($data);
