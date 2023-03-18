<?php
include_once __DIR__ . "/vendor/autoload.php";

$router = new \Ls\ClientAssistant\Core\Router();
$router->setViewsDirectoryAddress((__DIR__ . DIRECTORY_SEPARATOR . 'views'));

include_once __DIR__ . '/routes/auth.php';
include_once __DIR__ . '/routes/blog.php';
include_once __DIR__ . '/routes/cart.php';
include_once __DIR__ . '/routes/lms.php';
include_once __DIR__ . '/routes/pages.php';
include_once __DIR__ . '/routes/panel.php';
include_once __DIR__ . '/routes/shop.php';

$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}