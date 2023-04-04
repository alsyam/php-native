<?php

use function Helper\helpMe;

require_once "data/Conflict.php";
require_once "data/Helper.php";

// membuat object
$conflict1 = new Data\one\Conflict();
$conflict2 = new Data\two\Conflict();

echo Helper\APPLICATION . PHP_EOL;
Helper\helpMe();
