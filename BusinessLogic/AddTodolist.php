<?php

// menambah todo ke list
function addTodolist(string $todo)
{
    global $todolist;

    $index = sizeof($todolist)+1;

    $todolist[$index] = $todo;
}