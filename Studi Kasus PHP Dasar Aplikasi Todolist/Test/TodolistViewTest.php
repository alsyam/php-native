<?php 

require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodoListRepositoryImp;
use \Service\TodoListServiceImp;
use \View\TodoListView;

function testViewShowTodoList()
{
    $todoListRepository = new TodoListRepositoryImp();
    $todolistService = new TodoListServiceImp($todoListRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP DAsar");

    $todolistView->showTodolist();

}

function testViewAddTodoList()
{
    $todoListRepository = new TodoListRepositoryImp();
    $todolistService = new TodoListServiceImp($todoListRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP DAsar");
    $todolistService->showTodolist();

    $todolistView->addTodolist();
    
    $todolistService->showTodolist();
    
}
function testViewRemoveTodoList()
{
    $todoListRepository = new TodoListRepositoryImp();
    $todolistService = new TodoListServiceImp($todoListRepository);
    $todolistView = new TodoListView($todolistService);

    $todolistService->addTodolist("Belajar OOP");
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP DAsar");
    $todolistService->showTodolist();

    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();
    
    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();
    
}
testViewRemoveTodoList();