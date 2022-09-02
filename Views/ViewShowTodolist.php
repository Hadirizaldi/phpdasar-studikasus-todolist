<?php

require_once __DIR__ . "/../Model/Todolist.php";
require_once __DIR__ . "/../BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/../Views/ViewAddTodolist.php";
require_once __DIR__ . "/../Views/ViewDeleteTodolist.php";
require_once __DIR__ . "/../Utils/Input.php";


function viewShowTodolist()
{
    while(true) {
        showTodolist();

        echo "MENU" . PHP_EOL;
        echo "1. Add Todo" . PHP_EOL;
        echo "2. delete Todo" . PHP_EOL;
        echo "x. Quit" . PHP_EOL;
    
        $choices = input("Choice");
    
        if($choices == "1") {
            viewAddTodolist();
        }
        else if($choices == "2") {
            viewDeleteTodolist();
        }
        else if($choices == "x") {
            // quit
            break;    
        }
        else {
            echo "choices not found" . PHP_EOL;
        }
    }

    echo "See You Next Time". PHP_EOL;

}