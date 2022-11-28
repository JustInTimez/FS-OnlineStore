<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require __DIR__ . './../vendor/autoload.php';



// Create App
$app = AppFactory::create();

$app->get('/', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "home.php", $args);
})->setName('home');

$app->run();

