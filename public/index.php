<?php

use App\Controller\Errors\PageNotFoundController;
use DI\ContainerBuilder;
use Symfony\Component\Dotenv\Dotenv;

ini_set('display_errors', 1);

include_once dirname(__DIR__).'/vendor/autoload.php';

session_start();
$_SESSION['notifications'] = $_SESSION['notifications'] ?? [];

$routes = include '../config/routes.php';

(new Dotenv())->load(dirname(__DIR__).'/.env');

$url = explode('?', $_SERVER['REQUEST_URI'])[0];

if (false === isset($routes[$url])) {
    (new PageNotFoundController())->errorAction();
    exit;
}

$controller = $routes[$url]['controller'];
$method = $routes[$url]['method'];

$builder = new ContainerBuilder();
$builder->addDefinitions(dirname(__DIR__).'/config/config-di.php');
$container = $builder->build();

$controller = $container->get($controller);
$controller->$method();