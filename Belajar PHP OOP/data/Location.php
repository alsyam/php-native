<?php

namespace Data;

use Locale;

abstract class Location
{
    public $name;
}

class City extends Location
{
}
class Province extends Location
{
}
class Country extends Location
{
}
