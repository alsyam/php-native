<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$sql = "SELECT * FROM customers";
$statements = $connection->query($sql);

foreach ($statements as $row) {
    $id = $row["id"];
    $name = $row["name"];
    $email = $row["email"];

    echo "id : $id" . PHP_EOL;
    echo "name : $name" . PHP_EOL;
    echo "email : $email" . PHP_EOL;
}

$connection = null;
