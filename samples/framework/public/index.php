<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Selective\BasePath\BasePathMiddleware;
use Slim\Factory\AppFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require_once __DIR__ . '/../vendor/autoload.php';
$app = AppFactory::create();
$app->addRoutingMiddleware();
$app->add(new BasePathMiddleware($app));
$app->addErrorMiddleware(true, true, true);

$twig = Twig::create(__DIR__ . '/../app/views', ['cache' => false]);
$app->add(TwigMiddleware::create($app, $twig));

$app->get('/', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'page.html', [
        'pageTitle' => 'webapp',
        'title' => 'this is the title',
        'content' => 'content',
    ]);
});

$app->get('/home/{name}', function ($request, $response, $args) {
    $view = Twig::fromRequest($request);
    return $view->render($response, 'profile.html', [
        'name' => $args['name']
    ]);
})->setName('profile');

$app->get('/phpinfo', function (Request $request, Response $response) {
    return phpinfo();
});

$app->run();