<?php

class Student
{
    public $id;
    private $age;
    public $name;
    public $value;

    public function __clone()
    {
        unset($this->id);
    }
}
