<?php

require_once "data/Person.php";

$eko = new Person("AL", "Cikaret");
$eko->name = "Eko";
$eko->sayHello("Alsyam");

$tio = new Person("AL", "Cikaret");
$tio->name = "Tio";
$tio->sayHello(null);


$eko->info();
