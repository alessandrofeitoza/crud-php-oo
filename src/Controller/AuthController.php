<?php

declare(strict_types=1);

namespace App\Controller;

class AuthController extends AbstractController
{
    public function logoutAction(): void
    {
        $this->redirect('/login');
    }

    public function loginAction(): void
    {
        $this->render('auth/login', navbar: false);
    }
}