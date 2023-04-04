<?php

namespace Data;

interface HasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements Car, isMaintenance
{
    public function drive(): void
    {
        echo "Drive Avanza" . PHP_EOL;
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "honda";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
