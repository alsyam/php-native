<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


use Data\one\Conflict;
use function Helper\helpMe;
use const Helper\APPLICATION;

$conflict1 = new Conflict();
$conflict2 = new \Data\two\Conflict();


helpMe();

echo APPLICATION . PHP_EOL;
