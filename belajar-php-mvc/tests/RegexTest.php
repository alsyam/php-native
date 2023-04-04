<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class RegexTest extends TestCase
{
    public function testRegex()
    {
        $path = "/products/12345/categories/abcde";

        $patern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

        $result = preg_match($patern, $path, $variables);

        self::assertEquals(1, $result);

        var_dump($variables);

        // untuk menhapus data pertama
        array_shift($variables);
        var_dump($variables);
    }
}
