<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Gorengan");
addTodolist("Mie Goreng");
addTodolist("CapCay");

var_dump($todolist);
