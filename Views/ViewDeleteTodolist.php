<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Utils/Input.php";
require_once __DIR__ . "/../BusinessLogic/DeleteTodolist.php";

function viewDeleteTodolist()
{
    echo "DELETE TODO".PHP_EOL;

    $choices = input("Number: (x for quit)");

    if ($choices == "x") {
        echo "Quit". PHP_EOL;
    }

    else {
        $success = deleteTodolist($choices);

        if($success) {
            echo "Success for delete todo number $choices". PHP_EOL;
        }
        else {
            echo "Not Success for delete todo number $choices". PHP_EOL;
        }
    }


}