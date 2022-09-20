<?php

declare(strict_types=1);

namespace App\Repository;

use App\Connection\DatabaseConnection;
use App\Entity\Book;
use DateTime;
use PDO;

class BookRepository implements RepositoryInterface
{
    private PDO $pdo;
    public const TABLE = 'tb_book';

    public function __construct()
    {
        $this->pdo = DatabaseConnection::open();
    }

    public function findAll(): array
    {
        $query = 'SELECT b.*, c.name as category FROM '.self::TABLE.' b INNER JOIN '.CategoryRepository::TABLE.' c ON b.category_id = c.id';

        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchAll(PDO::FETCH_CLASS, Book::class);
    }

    public function findOneById(string $id): Book
    {
        $query = 'SELECT b.*, c.name as category FROM '.self::TABLE.' b INNER JOIN '.CategoryRepository::TABLE.' c ON b.category_id = c.id WHERE b.id='.$id;

        $result = $this->pdo->query($query);
        $result->execute();

        return $result->fetchObject(Book::class);
    }

    public function countAll(): int
    {
        $query = 'SELECT COUNT(*) FROM '.self::TABLE;

        return $this->pdo->query($query)->fetchColumn();
    }

    public function save(Book $book): void
    {
        $now = new DateTime();

        $query = 'INSERT INTO '.self::TABLE."(title, isbn, language, category_id, created_at) VALUES (
            '{$book->getTitle()}',
            '{$book->getIsbn()}',
            '{$book->getLanguage()}',
            '{$book->getCategoryId()}',
            '{$now->format('Y-m-d H:i:s')}'
        )";

        $this->pdo->query($query);
    }

    public function update(Book $book): void
    {
        $query = 'UPDATE '.self::TABLE." SET 
            title='{$book->getTitle()}', 
            isbn='{$book->getIsbn()}',
            language='{$book->getLanguage()}', 
            category_id='{$book->getCategoryId()}' 
            WHERE id={$book->getId()}";

        $this->pdo->query($query);
    }

    public function remove(string $id): void
    {
        $query = 'DELETE FROM '.self::TABLE." WHERE id={$id};";

        $this->pdo->query($query);
    }
}
