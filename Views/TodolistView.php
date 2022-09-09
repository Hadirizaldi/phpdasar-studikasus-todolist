<?php

namespace View;

use Service\TodolistService;
use Utils\InputHelper;

class TodolistView
{
    private TodolistService $todolistService;

    function __construct(TodolistService $todolistService)
    {
        $this->todolistService = $todolistService;
    }

    function showTodolist(): void
    {
        while (true) {
            $this->todolistService->showTodolist();

            echo "MENU" . PHP_EOL;
            echo "1. Add Todo" . PHP_EOL;
            echo "2. delete Todo" . PHP_EOL;
            echo "x. Quit" . PHP_EOL;

            $choices = InputHelper::input("Choice");

            if ($choices == "1") {
                $this->addTodolist();
            } else if ($choices == "2") {
                $this->removeTodolist();
            } else if ($choices == "x") {
                // quit
                break;
            } else {
                echo "choices not found" . PHP_EOL;
            }
        }

        echo "See You Next Time" . PHP_EOL;
    }

    function addTodolist(): void
    {
        echo "ADD TODO" . PHP_EOL;

        $todo = InputHelper::input("TODO (x for quit) ");

        if ($todo == "x") {
            echo "Quit" . PHP_EOL;
        } else {
            $this->todolistService->addTodolist($todo);
        }
    }

    function removeTodolist(): void
    {
        echo "REMOVE TODO" . PHP_EOL;

        $choice = InputHelper::input("Number: (x for quit)");

        if ($choice == 'x') {
            echo "Quit" . PHP_EOL;
        } else {
            $success = $this->todolistService->removeTodolist($choice);

            if ($success) {
                echo "Success for delete todo number $choice" . PHP_EOL;
            } else {
                echo "Not Success for delete todo number $choice" . PHP_EOL;
            }
        }
    }
}
