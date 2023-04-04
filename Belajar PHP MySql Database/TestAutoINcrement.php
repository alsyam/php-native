<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->exec("INSERT INTO comments(email, comment) VALUES ('alsyam@gmail.com', 'Hadir')");

$id = $connection->lastInsertId();
echo "NO id " . $id . PHP_EOL;


$connection = null;
