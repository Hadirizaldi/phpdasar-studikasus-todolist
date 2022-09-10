<?php

namespace Config;

use PDO;

class Database
{
    static function getConnection(): PDO
    {
        $host = "127.0.0.1";
        $port = 3306;
        $username = "root";
        $password = "111213";
        $db = "php_todolist";

        return new PDO("mysql:host=$host:$port", $username, $password);
    }
}
