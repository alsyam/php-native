
<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request  = new LoginRequest();
$request->username = "al";
$request->password = "syam";

// ValidationUtil::validate($request);

ValidationUtil::validateReflection($request);
