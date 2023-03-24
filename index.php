<?php
include_once __DIR__ . "/vendor/autoload.php";

//Loading env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

//Loading router
$router = new \Ls\ClientAssistant\Core\Router();
$router->setViewsDirectoryAddress((__DIR__ . DIRECTORY_SEPARATOR . 'views'));

//Loading route files
$routeFiles = glob((__DIR__ . DIRECTORY_SEPARATOR . 'routes' . DIRECTORY_SEPARATOR . '*.php'));
foreach ($routeFiles as $route) {
    include_once $route;
}

//Matching routes
$match = $router->match();
if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}