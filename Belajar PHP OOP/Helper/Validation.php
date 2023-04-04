<?php

// require_once "data/LoginRequest.php";

function validationLoginRequest(LoginRequest $request)
{
    if (!isset($request->username)) {
        throw new ValidationException("Username is Null");
    } elseif (!isset($request->password)) {
        throw new ValidationException("Password is Null");
    } elseif (trim($request->username) == "") {
        throw new Exception("Username is Empty");
    } elseif (trim($request->username) == "") {
        throw new Exception("Username is Empty");
    }
}
