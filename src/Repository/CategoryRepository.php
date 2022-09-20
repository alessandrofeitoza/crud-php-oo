<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Entity\Category;
use PDO;

class CategoryRepository implements RepositoryInterface
{
    private PDO $pdo;
    public const TABLE = 'tb_category';

    public function __construct()
    {
        $this->pdo = DatabaseConnection::open();
    }

    public function findAll(): array
    {
        $query = 'SELECT * FROM '.self::TABLE;

        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_CLASS, Category::class);
    }

    public function countAll(): int
    {
        $query = 'SELECT COUNT(*) FROM '.self::TABLE;

        return $this->pdo->query($query)->fetchColumn();
    }

    public function findOneById(string $id): Category
    {
        $query = 'SELECT * FROM '.self::TABLE." WHERE id='{$id}';";

        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchObject(Category::class);
    }

    public function save(Category $category): void
    {
        $query = 'INSERT INTO '.self::TABLE."(name) VALUES('{$category->getName()}')";

        $this->pdo->query($query);
    }

    public function update(Category $category): void
    {
        $query = 'UPDATE '.self::TABLE." SET name='{$category->getName()}' WHERE id={$category->getId()}";

        $this->pdo->query($query);
    }

    public function remove(string $id): void
    {
        $query = 'DELETE FROM '.self::TABLE." WHERE id={$id};";

        $this->pdo->query($query);
    }
}