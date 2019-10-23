<?php

$arr = [
    [
        'id' => 0,
        'name' => '1'
    ],
    [
        'id' => 0,
        'name' => 'dasw'
    ],
    [
        'id' => 0,
        'name' => '2184612412'
    ],
    [
        'id' => 0,
        'name' => '23'
    ],
    [
        'id' => 0,
        'name' => '543333333333333333333333333'
    ],
    [
        'id' => 0,
        'name' => '132'
    ],
];

foreach ($arr as $item){
    $arr2[] = strlen($item['name']);
}

array_multisort($arr2,$arr);
var_dump($arr);
