<?php
$http = new swoole_http_server('0.0.0.0',9501,SWOOLE_BASE);

function doSomething(){
    $client = new swoole_client(SWOOLE_SOCK_TCP);
    if ($client->connect()){

    }
}

$http->on('request',function ($req,$res){
//    doSomething();
    $res->end("<h1>Hello,swoole</h1>");
});

$http->start();