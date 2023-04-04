<?php

require_once "data/Student.php";


$student1 = new Student();
$student1->id = "1";
$student1->name = "1";
$student1->value = "1";

$student2 = new Student();
$student2->id = "1";
$student2->name = "1";
$student2->value = "1";
// equal
var_dump($student1 == $student2);
// identity
var_dump($student1 === $student2);
