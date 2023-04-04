<?php

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('ProgrammerZamanNow');
$log->pushHandler(new StreamHandler('appLication.log', Logger::INFO));

$log->info("Hello World");
$log->info("Selamat belajar Composer");
