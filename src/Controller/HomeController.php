<?php

declare(strict_types=1);

namespace App\Controller;

use App\Repository\BookRepository;
use App\Repository\CategoryRepository;

class HomeController extends AbstractController
{
    private BookRepository $bookRepository;
    private CategoryRepository $categoryRepository;

    public function __construct(BookRepository $bookRepository, CategoryRepository $categoryRepository)
    {
        $this->bookRepository = $bookRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function indexAction(): void
    {
        $this->render('home/index', [
            'quantityCategories' => $this->categoryRepository->countAll(),
            'quantityBooks' => $this->bookRepository->countAll(),
        ]);
    }
}