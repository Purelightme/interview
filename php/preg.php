<?php

$str = file_get_contents('http://www.51tgz.com');
preg_match('/<title>(.+)<\/title>/',$str,$match);
var_dump($match);
