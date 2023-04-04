<?php

require_once "exception/ValidationException.php";
require_once "Helper/Validation.php";
require_once "data/LoginRequest.php";


$loginRequest = new LoginRequest();
$loginRequest->username = "";
$loginRequest->password = "";

try {
    validationLoginRequest($loginRequest);
    echo "VALID" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "ERROR : {$exception->getMessage()}" . PHP_EOL;

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString();
} finally {
    echo "ERORR GA ERORR AKANDI EKSESKUSI" . PHP_EOL;
}
