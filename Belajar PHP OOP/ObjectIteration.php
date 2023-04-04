<?php

class Data implements IteratorAggregate
{
    var $first = "First";
    public $second = "Second";
    private $third = "Third";
    protected $fourt = "Fourt";

    // // iterasi manual
    // public function getIterator()
    // {
    //     $array = [
    //         "first" => $this->first,
    //         "second" => $this->second,
    //         "third" => $this->third,
    //         "fourt" => $this->fourt,
    //     ];

    //     return new ArrayIterator($array);
    // }

    // iterasi yield generator
    public function getIterator()
    {
        yield "first" => $this->first;
        yield "second" => $this->second;
        yield  "third" => $this->third;
        yield  "fourt" => $this->fourt;
    }
}

$data  = new Data();

foreach ($data as $property => $value) {
    echo "$property : $value" . PHP_EOL;
}
