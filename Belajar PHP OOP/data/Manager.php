<?php

class Manager
{
    var $name;

    var $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name = $name;
        $this->title = $title;
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is manager $this->name" . PHP_EOL;
    }
}

class vicePresident extends Manager
{

    public function __construct(string $name = "")
    {
        // tidak wajib tapi di rekomendasikan
        parent::__construct($name, "VP");
    }

    function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
