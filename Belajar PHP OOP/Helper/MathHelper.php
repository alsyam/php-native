<?php

namespace Helper;

class MathHelper
{
    static public $name = "MathHelper";

    static public function sum(int ...$number): int
    {
        $total = 0;
        foreach ($number as $num) {
            $total += $num;
        }

        return $total;
    }
}

// echo MathHelper::$name . PHP_EOL;
