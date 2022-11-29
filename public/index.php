<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;

require __DIR__ . '/../vendor/autoload.php';

// Create App
$app = AppFactory::create();

$app->get('/', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "home.php", $args);
})->setName('home');

$app->get('/about', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "about.php", $args);
})->setName('about');

$app->get('/lookbook', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "lookbook.php", $args);
})->setName('lookbook');

$app->get('/shop', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "shop.php", $args);
})->setName('shop');

$app->get('/contact', function ($request, $response, $args) {
    $renderer = new PhpRenderer('views');
    return $renderer->render($response, "contact.php", $args);
})->setName('contact');




$app->run();

