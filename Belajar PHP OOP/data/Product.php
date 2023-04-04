<?php

class Product
{
    protected $name;
    protected $price;

    public function  __construct(string $name, int $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }


    public function getPrice()
    {
        return $this->price;
    }
}

class ProductDUmmy extends Product
{
    public function info()
    {
        echo "Name : $this->name";
    }
}
