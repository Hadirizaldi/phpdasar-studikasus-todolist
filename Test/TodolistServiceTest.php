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
    $todolistRepository->todolist[1] = new Todolist("PHP");
    $todolistRepository->todolist[2] = new Todolist("PHP");
    $todolistRepository->todolist[3] = new Todolist("PHP");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    // $todolistService->showTodolist();
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
    $todolistService->addTodolist("Django");
    $todolistService->addTodolist("Python");
    $todolistService->addTodolist("Ruby");
    $todolistService->showTodolist();

    // test remove
    $todolistService->removeTodolist(2);
    $todolistService->showTodolist();
}

// testRemoveTodolist();
testAddTodolist();
// testShowTodolist();
