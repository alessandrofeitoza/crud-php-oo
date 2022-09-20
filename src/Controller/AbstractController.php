<?php

declare(strict_types=1);

namespace App\Controller;

use App\Notification\WebNotification;

abstract class AbstractController
{
    public function render(string $viewName, array $data = [], bool $navbar = true): void
    {
        extract($data);

        include dirname(__DIR__, 2).'/views/_partials/head.php';
        $navbar && include dirname(__DIR__, 2).'/views/_partials/navbar.php';

        WebNotification::showMessages();

        include dirname(__DIR__, 2)."/views/{$viewName}.php";
        include dirname(__DIR__, 2).'/views/_partials/footer.php';
    }

    public function redirect(string $routeName): void
    {
        header('location: '.$routeName);
    }
}
