<?php

require_once __DIR__ . "/Model/Todolist.php";
require_once __DIR__ . "/BusinessLogic/ShowTodolist.php";
require_once __DIR__ . "/BusinessLogic/AddTodolist.php";
require_once __DIR__ . "/BusinessLogic/DeleteTodolist.php";
require_once __DIR__ . "/Views/ViewShowTodolist.php";
require_once __DIR__ . "/Views/ViewAddTodolist.php";
require_once __DIR__ . "/Views/ViewDeleteTodolist.php";
require_once __DIR__ . "/Utils/Input.php";

echo "Aplikasi todo". PHP_EOL;

viewShowTodolist();
