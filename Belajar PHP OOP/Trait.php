<?php

require_once "data/SayGoodBye.php";

use Data\Traits\{Person, SayGoodBay, SayHello};

$person = new Person();
$person->sayHello("budi");
$person->goodBye("budi");

$person->name = "sandi";
var_dump($person);

$person->run();
