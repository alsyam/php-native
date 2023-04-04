<?php

namespace Data\Traits;

trait SayGoodBay
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}


trait SayHello
{
    public function sayHello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

trait hasName
{
    public $name;
}

trait canRun
{
    public abstract function run(): void;
}

class parentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good bye in person $name" . PHP_EOL;
    }
    public function sayHello(?string $name): void
    {
        echo "Hello in person  $name" . PHP_EOL;
    }
}

trait All
{
    use SayHello, SayGoodBay, hasName, canRun;

    // visibility trait
    //  {
    //     sayHello as private;
    //     goodbye as private;
    // }

}

class Person extends parentPerson
{

    use All;
    public  function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }
}
