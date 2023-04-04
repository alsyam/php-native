<?php

namespace Repository {

    use ArrayAccess;
    use Entity\TodoList;

    interface TodoListRepository
    {
        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }

    class TodoListRepositoryImp implements TodoListRepository
    {

        public  $todolist = array();
        function save(TodoList $todoList): void
        {
            $number = sizeof($this->todolist) + 1;

            $this->todolist[$number] = $todoList;
        }
        function remove(int $number): bool
        {
            if ($number > sizeof($this->todolist)) {
                return false;
            }

            for ($i = $number; $i < sizeof($this->todolist); $i++) {
                $this->todolist[$i] = $this->todolist[$i + 1];
            }

            unset($this->todolist[sizeof($this->todolist)]);

            return true;
        }

        function findAll(): array
        {
            return $this->todolist;
        }
    }
}
