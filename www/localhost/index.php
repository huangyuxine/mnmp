<?php


// $mysql = "mysql83";

// $pdo = new PDO("mysql:host={$mysql};dbname=mysql", 'root', '123123');

// var_dump($pdo);

$redis = new Redis();

$redis->connect('redis', 6379);
$auth = $redis->auth('123123'); 

var_dump($auth);