<?php

use Slim\Factory\AppFactory;

include_once __DIR__ . "/vendor/autoload.php";

//Loading env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//Loading router
$router = \Ls\ClientAssistant\Core\Router\RouterAppFactoryAdapter::createWithApiKey($_ENV['LS_API_KEY'], $_ENV['CORE_URL']);
$router->addErrorMiddleware(true, true, true);


//Loading route files
$routeFiles = glob((__DIR__ . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . '*.php'));
foreach ($routeFiles as $route) {
    include_once $route;
}

$router->run();