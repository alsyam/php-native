<?php

require_once "data/Animal.php";
require_once "data/AnimalShelter.php";


$catShelter = new \Data\CatShelter();
$cat = $catShelter->adopt("Tina");

$dogShelter = new \Data\DogShelter();
$dog = $dogShelter->adopt("Tina");
