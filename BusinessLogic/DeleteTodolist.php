<?php

// menghapus todo dari list
function deleteTodolist(int $index): bool
{
    global $todolist;

    if($index > sizeof($todolist)) {
        return false;
    }

    for ($i = $index; $i < sizeof($todolist); $i++) {
        $todolist[$i] = $todolist[$i + 1];
    }

    unset($todolist[sizeof($todolist)]);

    return true;
}
