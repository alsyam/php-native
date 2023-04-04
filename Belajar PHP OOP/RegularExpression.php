<?php

$matches = [];
$result = preg_match_all("/mu|al|am/i", "Muhammad Al Syam", $matches);

var_dump($result);
var_dump($matches);


$result = preg_replace("/anjing|tai|bangsat/i", "***", "tai luh, li anjing, bangsat lu");

var_dump($result);


$result = preg_split("/[\s,-]/", "Muhammad Al-Syam,12183466");
var_dump($result);
