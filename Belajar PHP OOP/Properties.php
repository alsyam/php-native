<?php

require_once "data/Person.php";

$person = new Person("AL", "Cikaret");

$person->name = "Alsyam";
$person->address = null;
// $person->country = "INdonesia";

var_dump($person);

echo "Name : $person->name" . PHP_EOL;
echo "Address : $person->address" . PHP_EOL;
echo "Country : $person->country" . PHP_EOL;
