<?php

declare(strict_types=1);

namespace App\Controller\Errors;

use App\Controller\AbstractController;

class PageNotFoundController extends AbstractController
{
    public function errorAction(): void
    {
        $this->render('errors/notFound');
    }
}