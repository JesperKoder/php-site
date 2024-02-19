<?php 

$database = [
    'host' => 'localhost',
    'port' => 3306,
    'dbname' => 'myapp',
    'username' => 'newuser',
    'password' => 'newpassword',
    'charset' => 'utf8mb4',
];

// Create a PDO connection
try {
    $connection = new PDO(
        'mysql:host=' . $database['host'] . ';port=' . $database['port'] . ';dbname=' . $database['dbname'] . ';charset=' . $database['charset'],
        $database['username'],
        $database['password']
    );
    // Set PDO to throw exceptions on error
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
