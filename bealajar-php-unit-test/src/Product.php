<?php

namespace ProgrammerZamanNow\Test;

class Product
{
    private string $id, $name, $description;
    private int $price, $quatity;

    public function getId(): string
    {
        return $this->id;
    }
    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescriptioon(): string
    {
        return $this->descriptioon;
    }
    public function setDescriptioon(string $descriptioon): void
    {
        $this->descriptioon = $descriptioon;
    }

    public function getPrice(): int
    {
        return $this->price;
    }
    public function setPrice(int $price): void
    {
        $this->price = $price;
    }

    public function getQuatity(): int
    {
        return $this->quatity;
    }
    public function setQuatity(int $quatity): void
    {
        $this->quatity = $quatity;
    }
}
