<?php

namespace ProgrammerZamanNow\Data;

class People
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name)
    {
        // return "Hello $this->name";
        echo "Hello $name, My Name is  $this->name";
    }
}
