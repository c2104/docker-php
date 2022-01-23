<?php

$dsn = 'mysql:host=db;dbname=sample_db;charset=utf8mb4';
$user = 'sample_user';
$password = 'sample_passowrd';

try {
    $db = new PDO($dsn, $user, $password);
    echo "DB接続成功<br>";
} catch (PDOException $e) {
    echo "DB接続失敗: " . $e->getMessage() . "\n";
}

phpinfo();
