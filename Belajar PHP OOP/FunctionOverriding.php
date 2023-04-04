<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("JOKO");

$vp = new vicePresident();
$vp->name = "Sandi";
$vp->sayHello("JOKO");
