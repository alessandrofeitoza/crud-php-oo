<?php

use App\Controller\AuthController;
use App\Controller\BookController;
use App\Controller\CategoryController;
use App\Controller\HomeController;

function mountRoute(string $controllerName, string $methodName): array
{
    return [
        'controller' => $controllerName,
        'method' => $methodName.'Action',
    ];
}

return [
    '/' => mountRoute(HomeController::class, 'index'),
    '/logout' => mountRoute(AuthController::class, 'logout'),
    '/login' => mountRoute(AuthController::class, 'login'),
    '/categorias/listar' => mountRoute(CategoryController::class, 'list'),
    '/categorias/nova' => mountRoute(CategoryController::class, 'add'),
    '/categorias/excluir' => mountRoute(CategoryController::class, 'remove'),
    '/categorias/editar' => mountRoute(CategoryController::class, 'edit'),
    '/livros/listar' => mountRoute(BookController::class, 'list'),
    '/livros/novo' => mountRoute(BookController::class, 'add'),
    '/livros/excluir' => mountRoute(BookController::class, 'remove'),
    '/livros/editar' => mountRoute(BookController::class, 'edit'),
];