<?php

$date = new DateTime();

$date->setDate(2000, 12, 24);
$date->setTime(12, 12, 24);


$date->add(new DateInterval("P1Y"));

$minusOneMont = new DateInterval("P1M");
$minusOneMont->invert = true;

$date->add($minusOneMont);

// $date->setTimezone(new DateTimeZone("Asia/Jakarta"));
var_dump($date);

// konvert ke stirng
echo $date->format("d-m-Y H:i:s") . PHP_EOL;

// konverse ke date time
$dateTime = DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2021 10:10:10", new DateTimeZone("Asia/Jakarta"));
var_dump($dateTime);
