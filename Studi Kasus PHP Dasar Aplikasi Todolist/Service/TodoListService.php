<?php

namespace Service {

    use Entity\TodoList;
    use Repository\TodoListRepository;

    interface TodoListService
    {
        function showTodolist(): void;

        function addTodolist(string $todo): void;

        function removeTodolist(int $number): void;
    }

    class TodoListServiceImp implements TodoListService
    {

        private  $todoListRepository;
        // private TodoListRepository $todoListRepository;

        public function __construct(TodoListRepository $todoListRepository)
        {
            $this->todoListRepository = $todoListRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;

            foreach ($this->todoListRepository->findAll() as $number => $value) {
                echo "$number. " . $value->getTodo() . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todoList = new TodoList($todo);
            $this->todoListRepository->save($todoList);
            echo "SUKSES MENAMBAH TODOLIST" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if ($this->todoListRepository->remove($number)) {
                echo "SUKSES MENGHAPUS TODOLIST" . PHP_EOL;
            } else {
                echo "GAGAL MENGHAPUS TODOLIST" . PHP_EOL;
            }
        }
    }
}
