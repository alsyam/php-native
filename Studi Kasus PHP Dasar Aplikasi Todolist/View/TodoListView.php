<?php

namespace View {

    use Service\TodoListService;
    use Helper\InputHelper;

    class TodoListView
    {
        private  $todoListService;

        public function __construct(TodolistService $todolistService)
        {
            $this->todoListService = $todolistService;
        }

        function showTodolist(): void
        {
            while (true) {
                $this->todoListService->showTodolist();
                echo "Menu" . PHP_EOL;
                echo "1. Tambah Todo" . PHP_EOL;
                echo "2. Hapus Todo" . PHP_EOL;
                echo "x. Keluar Todo" . PHP_EOL;

                $pilihan = InputHelper::input("Pilih");

                if ($pilihan == "1") {
                    $this->AddTodolist();
                } else if ($pilihan == "2") {
                    $this->RemoveTodolist();
                } elseif ($pilihan == "x") {
                    break;
                } else {
                    echo "Pilhan Anda tidak Kami Mengerti" . PHP_EOL;
                }
            }

            echo "Good Luck" . PHP_EOL;
        }

        function addTodolist(): void
        {
            echo "MENAMBAH TODO" . PHP_EOL;

            $todo = InputHelper::input("Todo (x Untuk Batal)");

            if ($todo == "x") {
                echo "Batal Menambah Todo" . PHP_EOL;
            } else {
                $this->todoListService->addTodolist($todo);
            }
        }

        function removeTodolist(): void
        {
            echo "MENGHAPUS TODO" . PHP_EOL;

            $pilihan = InputHelper::input("Nomor(x untuk membatalkan)");

            if ($pilihan == "x") {
                echo "Batal Menghapus Todo" . PHP_EOL;
            } else {
                $this->todoListService->removeTodolist($pilihan);
            }
        }
    }
}
