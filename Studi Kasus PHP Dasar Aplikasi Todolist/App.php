<?php

require_once __DIR__ . "/Entity/TodoList.php";
require_once __DIR__ . "/Helper/InputHelper.php";
require_once __DIR__ . "/Repository/TodoListRepository.php";
require_once __DIR__ . "/Service/TodoListService.php";
require_once __DIR__ . "/View/TodoListView.php";

use Entity\Todolist;
use Repository\TodoListRepositoryImp;
use Service\TodoListServiceImp;
use View\TodoListView;

echo "Aplikasi Todolist" . PHP_EOL;

$todoListRepository = new TodoListRepositoryImp();
$todolistService = new TodoListServiceImp($todoListRepository);
$todolistView = new TodoListView($todolistService);


$todolistView->showTodolist();
