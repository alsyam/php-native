<?php

require_once "data/Manager.php";

$manager = new Manager();
$manager->name = "Budi";
$manager->sayHello("Sandi");

$vp = new vicePresident();
$vp->name = "Nandar";
$vp->sayHello("Sandi");
