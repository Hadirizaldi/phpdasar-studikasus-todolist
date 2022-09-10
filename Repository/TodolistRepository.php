<?php

namespace Repository;

use Entity\Todolist;
use PDO;

interface TodolistRepository
{
    function save(Todolist $todolist): void;
    function remove(int $number): bool;
    function findAll(): array;
}

class TodolistRepositoryImpl implements TodolistRepository
{

    public array $todolist = array();
    private PDO $connection;

    public function __construct(PDO $connection)
    {
        $this->connection = $connection;
    }

    function save(Todolist $todolist): void
    {
        // $index = sizeof($this->todolist) + 1;
        // $this->todolist[$index] = $todolist;

        $sql = "INSERT INTO todolist(todo) VALUES(:todo)";
        $statment = $this->connection->prepare($sql);
        $statment->bindParam(":todo", $todolist->getTodo());
        $statment->execute();
    }

    function remove(int $number): bool
    {


        if ($number > sizeof($this->todolist)) {
            return false;
        }

        for ($i = $number; $i < sizeof($this->todolist); $i++) {
            $this->todolist[$i] = $this->todolist[$i + 1];
        }
        unset($this->todolist[sizeof($this->todolist)]);
        // array_pop($this->todolist);

        return true;
    }

    function findAll(): array
    {
        return $this->todolist;
    }
}
