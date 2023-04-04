<?php

class ValidationUtil
{
    static function validate(LoginRequest $request)
    {
        if (!isset($request->username)) {
            throw new ValidationException("Username is not set");
        } elseif (!isset($request->password)) {
            throw new ValidationException("Password is not set");
        } elseif (is_null($request->password)) {
            throw new ValidationException("Username is Null");
        } elseif (is_null($request->password)) {
            throw new ValidationException("Password is Null");
        }
    }


    static function validateReflection($request)
    {
        $reflection = new ReflectionClass($request);
        $properties = $reflection->getProperties(ReflectionProperty::IS_PUBLIC);
        foreach ($properties as $property) {
            if (!$property->isInitialized($request)) {
                throw new ValidationException("$property->name is not set");
            } else if (is_null($property->getValue($request))) {
                throw new ValidationException("$property->name is null");
            }
        }
    }
}
