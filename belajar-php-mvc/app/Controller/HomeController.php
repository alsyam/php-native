<?php

namespace ProgrammerZamanNow\Belajar\PHP\MVC\Controller;

use ProgrammerZamanNow\Belajar\PHP\MVC\App\View;

class HomeController
{
    function index(): void
    {
        $model = [
            "title" => "HAloo Semuanya",
            "content" => "Belajar PHP MVC NIHHHH"
        ];

        View::render('Home/index', $model);
    }

    function hello(): void
    {
        echo "HomeController.hello()";
    }

    function world(): void
    {
        echo "HomeController.world()";
    }
}
