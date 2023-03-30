<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$router->get('/hello', function (Request $request, Response $response) {

    $data = [];

    view('hello', $data);

    return $response;
})->setName('hello');

$router->get('/bye', function (Request $request, Response $response) {

    echo 'good bye';

    return $response;
})->setName('bye');