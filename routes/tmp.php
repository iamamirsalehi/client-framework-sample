<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$router->get('/', function (Request $request, Response $response) {
    view('hello');

    return $response;
});