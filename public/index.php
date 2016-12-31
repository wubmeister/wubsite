<?php

include '../vendor/autoload.php';

$router = new Framewub\Route\Router();
$router->setFallback('Wubsite\\Hello');

$app = new Framewub\App();
$app->setRouter($router);
$request = new Framewub\Http\Message\ServerRequest();
$response = $app->handleRequest($request);

if ($response && $response instanceof Framewub\Http\Message\Response) {
    $response->flush();
}
