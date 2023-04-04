<?php


require_once __DIR__ . '/vendor/autoload.php';

use ProgrammerZamanNow\Data\People;


$people = new People("Alsyam");

echo $people->sayHello("budi") . PHP_EOL;
