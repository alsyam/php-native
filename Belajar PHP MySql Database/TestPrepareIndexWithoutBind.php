<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();
// untuk menggagalkann sql injection
$username = "aku";
$password = "kamu";


$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$statement = $connection->prepare($sql);
$statement->execute([$username, $password]);

$success = false;
$find_user = null;
foreach ($statement as $row) {
    // sukses
    $success = true;
    $find_user = $row['username'];
}

if ($success) {
    echo "Sukses Login " . $find_user . PHP_EOL;
} else {
    echo "Login Gagal" . PHP_EOL;
}

$connection = null;
