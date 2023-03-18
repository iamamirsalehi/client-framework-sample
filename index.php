<?php
include_once __DIR__ . "/vendor/autoload.php";

$router = new \Ls\ClientAssistant\Core\Router();
$router->setViewsDirectoryAddress((__DIR__ . DIRECTORY_SEPARATOR . 'views'));

include_once __DIR__ . '/routes/lms.php';

$match = $router->match();

if (is_array($match) && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
}