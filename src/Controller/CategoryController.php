<?php

declare(strict_types=1);

namespace App\Controller;

use App\Entity\Category;
use App\Notification\WebNotification;
use App\Repository\CategoryRepository;

class CategoryController extends AbstractController
{
    private CategoryRepository $repository;

    public function __construct(CategoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function listAction(): void
    {
        $this->render('category/list', [
            'categories' => $this->repository->findAll(),
        ]);
    }

    public function addAction(): void
    {
        if (true === empty($_POST)) {
            $this->render('category/add');
            return;
        }

        $category = new Category();
        $category->setName($_POST['name']);

        $this->repository->save($category);

        $this->redirect('/categorias/listar');
    }

    public function editAction(): void
    {
        $category = $this->repository->findOneById($_GET['id']);

        if (true === empty($_POST)) {
            $this->render('category/edit', [
                'category' => $category,
            ]);
            return;
        }

        $category->setName($_POST['name']);

        $this->repository->update($category);

        WebNotification::addMessage('Categoria atualizada');

        $this->redirect('/categorias/listar');
    }

    public function removeAction(): void
    {
        $this->repository->remove($_GET['id']);

        WebNotification::addMessage('Categoria removida');

        $this->redirect('/categorias/listar');
    }
}