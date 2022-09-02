<?php

require_once "../Views/ViewAddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";


addTodolist("Django");
addTodolist("Laravel");
addTodolist("Angular");
addTodolist("React");
addTodolist("NodeJs");
addTodolist("ExpressJs");

viewAddTodolist();

showTodolist();