<?php

require_once "data/Animal.php";

use Data\{Animal, Cat, Dog};

// $animal = new Animal("Cio");
$dog = new Dog();
$dog->run();
$dog->name = "Cio";

$cat = new Cat();
$cat->name = "Bio";
$cat->run();
