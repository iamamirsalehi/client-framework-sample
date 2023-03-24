<?php
//TODO: ENV editor route, and view must be defined in assistant
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$router->get('/', function (Request $request, Response $response) {
    $data = [
        'users' => \Ls\ClientAssistant\Utilities\Modules\User::getUsers(),
    ];

    view('lms.products.list', $data);

    return $response;
})->addMiddleware(new \Middleware\Auth());
