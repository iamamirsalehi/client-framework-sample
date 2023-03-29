<?php
//TODO: ENV editor route, and view must be defined in assistant
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$router->get('/', function (Request $request, Response $response) {

    $data = [
        'products' => \Ls\ClientAssistant\Utilities\Modules\LMSProduct::list(),
    ];

    view('lms.products.list', $data);

    return $response;
});
