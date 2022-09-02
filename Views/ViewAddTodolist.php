<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../Utils/Input.php";
require_once __DIR__ . "/../BusinessLogic/AddTodolist.php";


function viewAddTodolist()
{
    echo "ADD TODO" . PHP_EOL;

    $todo = input("TODO (x for quit) ");

    if($todo=="x") {
        echo "Quit". PHP_EOL;
    }
    else {
        addTodolist($todo);
    }

    


}