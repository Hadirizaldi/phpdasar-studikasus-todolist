<?php

require_once "../Model/Todolist.php";
require_once "../Views/ViewDeleteTodolist.php";
require_once "../BusinessLogic/DeleteTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";


addTodolist("Django");
addTodolist("Laravel");
addTodolist("Angular");
addTodolist("React");
addTodolist("NodeJs");
addTodolist("ExpressJs");

showTodolist();

viewDeleteTodolist();

showTodolist();