<?php

require_once "../Views/ViewShowTodolist.php";
require_once "../BusinessLogic/AddTodolist.php";

addTodolist("Belajar PHP");
addTodolist("Revisi TA");
addTodolist("Belajar Laravel");

viewShowTodolist();