<?php

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";

use Entity\TodoList;
use Service\TodoListServiceImp;
use Repository\TodoListRepositoryImp;

function testShowTodoList(): void
{
    $todoListRepository =  new TodoListRepositoryImp();
    $todoListRepository->todoList[1] = new TodoList("Belajar PHP");
    $todoListRepository->todoList[2] = new TodoList("Belajar OOP");
    $todoListRepository->todoList[3] = new TodoList("Belajar WEB");


    $todoListService =  new TodoListServiceImp($todoListRepository);

    $todoListService->showTodolist();
}

function testAddTodoList(): void
{
    $todoListRepository =  new TodoListRepositoryImp();

    $todoListService =  new TodoListServiceImp($todoListRepository);
    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar OOP");
    $todoListService->addTodolist("Belajar Dasar");

    $todoListService->showTodolist();
}

function testRemoveTodoList(): void
{
    $todoListRepository =  new TodoListRepositoryImp();

    $todoListService =  new TodoListServiceImp($todoListRepository);
    $todoListService->addTodolist("Belajar PHP");
    $todoListService->addTodolist("Belajar OOP");
    $todoListService->addTodolist("Belajar Dasar");

    $todoListService->showTodolist();

    $todoListService->removeTodolist(2);
    $todoListService->showTodolist();

    $todoListService->removeTodolist(9);
    $todoListService->showTodolist();
}

testRemoveTodoList();
// testAddTodolist();
// testShowTodolist();
