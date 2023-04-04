<?php

$host = "localhost";
$port = 3306;
$database = "belajar_php_database";
$username = "root";
$password = "";

try {
    $connection = new PDO("mysql:host=$host:$port;dbname=$database", $username, $password);
    echo "Sukses Terkoneksi dengan Database MySQL" . PHP_EOL;

    // menutup konenksi
    $connection = null;
} catch (PDOException $exception) {
    echo "Gagal Terkoneksi dengan Database MySQL : " . $exception->getMessage() . PHP_EOL;
}
