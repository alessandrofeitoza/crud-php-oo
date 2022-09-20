<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Book;
use App\Notification\WebNotification;
use App\Repository\BookRepository;
use App\Repository\CategoryRepository;

class BookController extends AbstractController
{
    private BookRepository $repository;
    private CategoryRepository $categoryRepository;

    public function __construct(BookRepository $repository, CategoryRepository $categoryRepository)
    {
        $this->repository = $repository;
        $this->categoryRepository = $categoryRepository;
    }

    public function listAction(): void
    {
        $this->render('book/list', [
            'books' => $this->repository->findAll(),
        ]);
    }

    public function addAction(): void
    {
        if (true === empty($_POST)) {
            $this->render('book/add', [
                'categories' => $this->categoryRepository->findAll(),
            ]);
            return;
        }

        $book = new Book();
        $book->setTitle($_POST['title']);
        $book->setIsbn($_POST['isbn']);
        $book->setLanguage($_POST['language']);
        $book->setCategoryId((int) $_POST['category']);

        $this->repository->save($book);

        WebNotification::addMessage('Novo livro adicionado');

        $this->redirect('/livros/listar');
    }

    public function editAction(): void
    {
        $book = $this->repository->findOneById($_GET['id']);

        if (true === empty($_POST)) {
            $this->render('book/edit', [
                'categories' => $this->categoryRepository->findAll(),
                'book' => $book,
            ]);
            return;
        }

        $book->setTitle($_POST['title']);
        $book->setIsbn($_POST['isbn']);
        $book->setLanguage($_POST['language']);
        $book->setCategoryId((int) $_POST['category']);

        $this->repository->update($book);

        WebNotification::addMessage('Livro atualizado');

        $this->redirect('/livros/listar');
    }

    public function removeAction(): void
    {
        $this->repository->remove($_GET['id']);

        WebNotification::addMessage('Livro excluído');

        $this->redirect('/livros/listar');
    }
}
