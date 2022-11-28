<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;



require __DIR__ . '/../vendor/autoload.php';

// Create App
$app = AppFactory::create();


$app->get('/', function ($request, $response, $args) {
    $renderer = new PhpRenderer('/public/views');
    return $renderer->render($response, "home.php", $args);
});


// $app->get('/', function (Request $request, Response $response, $args) {
//     $response->getBody()->write("Hello world!");
//     return $response;
// });


$app->run();
