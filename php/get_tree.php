<?php

//无限分类
function get_tree($data)
{
    $arr = [];
    foreach ($data as $datum) {
        $arr[$datum['id']] = $datum;
    }
    $tree = [];
    foreach ($arr as $id => $item) {
        if (isset($arr[$item['pid']])) {
            $arr[$item['pid']]['children'][] = &$arr[$id];
        } else {
            $tree[] = &$arr[$id];
        }
    }
    return $tree;
}

$categories = [
    [
        'id' => 1,
        'pid' => 0,
        'name' => '全部'
    ],
    [
        'id' => 2,
        'pid' => 1,
        'name' => '服装'
    ],
    [
        'id' => 3,
        'pid' => 2,
        'name' => '上衣'
    ],
    [
        'id' => 4,
        'pid' => 2,
        'name' => '裤子'
    ],
    [
        'id' => 5,
        'pid' => 1,
        'name' => '数码'
    ],
];
var_dump(get_tree($categories));
