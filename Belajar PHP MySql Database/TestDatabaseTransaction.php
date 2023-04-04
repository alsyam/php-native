<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();

$connection->beginTransaction();


$connection->exec("INSERT INTO comments(email, comment) VALUES ('sandi@gmail.com', 'Hy')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('sandi@gmail.com', 'Hy')");
$connection->exec("INSERT INTO comments(emails, comment) VALUES ('sandi@gmail.com', 'Hy')");
$connection->exec("INSERT INTO comments(email, comment) VALUES ('sandi@gmail.com', 'Hy')");
$connection->exec("INSERT INTO comments(emails, comment) VALUES ('sandi@gmail.com', 'Hy')");


$connection->commit();


$connection = null;
