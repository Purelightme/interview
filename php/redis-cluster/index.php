<?php

require_once __DIR__.'/vendor/autoload.php';

$servers = [
    'tcp://127.0.0.1:7000',
    'tcp://127.0.0.1:7001',
    'tcp://127.0.0.1:7002',
    'tcp://127.0.0.1:7003',
    'tcp://127.0.0.1:7004',
    'tcp://127.0.0.1:7005',
    'tcp://127.0.0.1:7006',
    'tcp://127.0.0.1:7007',
];

$client = new \Predis\Client($servers,[
    'cluster' => 'redis',
    'parameters' => [
        'password' => 'redis'
    ]
]);

//$client->set('k1','v1');
//$client->set('k2','v2');
//$client->set('k3','v3');
//
//$v1 = $client->get('k1');
//$v2 = $client->get('k2');
//$v3 = $client->get('k3');
//$name = $client->get('name');
//$age = $client->get('age');
//$foo = $client->get('foo');
//$hello = $client->get('hello');
//
//var_dump($v1,$v2,$v3,$name,$age,$foo,$hello);

//var_dump($client->keys('*')); //redis-cluster不能用
//var_dump($client->mget(['name','age'])); //redis-cluster不能用

//var_dump($client->hgetall('user1'));

//var_dump($client->exec('cluster nodes')); //redis-cluster不能用

//var_dump($client->lpop('messages'));

//var_dump($client->smembers('users'));

//var_dump($client->zrank('scores','lisi'));

//var_dump($client->info()); //redis-cluster不能用

//foreach ($client->monitor() as $cmd){
//    var_dump($cmd);
//}