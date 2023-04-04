<?php

namespace ProgrammerZamanNow\Test;

use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    /**
     * @dataProvider mathSumData
     */
    public function testDataProvider(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }

    public function mathSumData(): array
    {
        return [
            [[5, 5], 10],
            [[4, 4, 4, 4, 4], 20],
            [[3, 3, 3], 9],
            [[], 0],
            [[2], 2]
        ];
    }

    /**
     * @testWith [[5, 5], 10]
     * [[4, 4, 4, 4, 4], 20]
     *  [[3, 3, 3], 9]
     *[[], 0]
     *[[2], 2]
     */
    public function testWith(array $values, int $expected)
    {
        self::assertEquals($expected, Math::sum($values));
    }
}
