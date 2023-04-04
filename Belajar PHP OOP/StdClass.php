<?php


// merubah array menjadi object
$array = [
    "firstName" => "Muhammad",
    "middleName" => "Al",
    "lastName" => "Syam"
];
// merybah jadi objext
$object = (object)$array;
// // kalo merubah jadi array
// $object = (array)$array;

var_dump($object);

echo "First name $object->firstName" . PHP_EOL;
echo "Middle name $object->middleName" . PHP_EOL;
echo "Last name $object->lastName" . PHP_EOL;
