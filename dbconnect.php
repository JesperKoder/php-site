<?php 

$database = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'dbname' => 'demo'
];

$connection = new PDO(
    'mysql:host=' . $database['host'] . ';dbname=' . $database['dbname'],
    $database['username'],
    $database['password']
);