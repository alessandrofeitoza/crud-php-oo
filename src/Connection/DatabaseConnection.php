<?php

declare(strict_types=1);

namespace App\Connection;

use PDO;
use PDOException;

final class DatabaseConnection
{
    public static function open(): PDO
    {
        $dsn = "mysql:host={$_ENV['DATABASE_HOST']};dbname={$_ENV['DATABASE_NAME']}";

        try {
            $connection = new PDO($dsn, $_ENV['DATABASE_USER'], $_ENV['DATABASE_PASSWORD']);
        } catch (PDOException $exception) {
            die ('Connection error: '.$exception->getMessage());
        }

        return $connection;
    }
}