<?php

require_once "../Model/Todolist.php";
require_once "../BusinessLogic/DeleteTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";
require_once "../BusinessLogic/ShowTodolist.php";

// proses tambah 
addTodolist("belajar PHP");
addTodolist("belajar Laravel");
addTodolist("belajar Django");
addTodolist("belajar CodeIgniter");
addTodolist("belajar mobile");

showTodolist();

// delete
deleteTodolist(3);

showTodolist();

deleteTodolist(1);

showTodolist();