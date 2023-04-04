<?php

require_once "data/Conflict.php";
require_once "data/Helper.php";


use Data\one\Conflict as Conflict1;
use Data\two\Conflict as Conflict2;
use function Helper\helpMe as help;
use const Helper\APPLICATION as App;

$conflict1 = new Conflict1();
$conflict2 = new Conflict2();


help();

echo App . PHP_EOL;
