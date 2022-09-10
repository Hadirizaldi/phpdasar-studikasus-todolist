<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Config/Database.php";

use Config\Database;
use Entity\Todolist;
use Repository\TodolistRepositoryImpl;
use Service\TodolistServiceImpl;

function testShowTodolist(): void
{
    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);

    // $todolistService->addTodolist("Django");
    // $todolistService->addTodolist("Python");
    // $todolistService->addTodolist("Ruby");

    $todolistService->showTodolist();
}

function  testAddTodolist()
{
    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Django");
    $todolistService->addTodolist("Python");
    $todolistService->addTodolist("Ruby");

    $todolistService->showTodolist();
}

function testRemoveTodolist()
{
    $connection = Database::getConnection();

    $todolistRepository = new TodolistRepositoryImpl($connection);
    $todolistService = new TodolistServiceImpl($todolistRepository);
    // test remove
    echo $todolistService->removeTodolist(7) . PHP_EOL;
    echo $todolistService->removeTodolist(8) . PHP_EOL;
    echo $todolistService->removeTodolist(9) . PHP_EOL;
    echo $todolistService->removeTodolist(10) . PHP_EOL;
    echo $todolistService->removeTodolist(11) . PHP_EOL;
    echo $todolistService->removeTodolist(12) . PHP_EOL;
}

// testRemoveTodolist();
// testAddTodolist();
testShowTodolist();
