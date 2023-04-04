<?php

require_once "data/Programmer.php";

$company = new Company();
$company->programmer  = new Programmer("Alsyam");
var_dump($company);


$company->programmer  = new BackendProgrammer("Alsyam");
var_dump($company);


$company->programmer  = new FrontendProgrammer("Alsyam");
var_dump($company);

helloProgrammer(new Programmer("alsyam"));
helloProgrammer(new BackendProgrammer("alsyam"));
helloProgrammer(new FrontendProgrammer("alsyam"));
