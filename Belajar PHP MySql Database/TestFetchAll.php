<?php

require_once __DIR__ . '/GetConnection.php';

$connection = getConnection();
$sql = "SELECT *FROM admin";
$statement = $connection->query($sql);
$custommer = $statement->fetchAll();
var_dump($custommer);

$connection = null;
