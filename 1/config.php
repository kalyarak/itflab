<?php

$config = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'product'
];

$db = mysqli_connect($config['host'] , $config['username'] , $config['password'] , $config['database']);
if(mysqli_error($db)){
    die("Database connection error");
}