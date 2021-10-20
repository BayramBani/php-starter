<?php

require __DIR__ . '/app/config.php';
require __DIR__ . '/app/vendor/autoload.php';
require __DIR__ . '/app/orm/rb-mysql.php';
require __DIR__ . '/app/controllers/MainController.php';
require __DIR__ . '/app/controllers/ContactController.php';

R::setup('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS);
Flight::set('flight.views.path', __DIR__ . '/app/views');

use flight\Engine;
$app = new Engine();
$app->route('/', array('MainController', 'home'));
$app->route('/test', array('MainController', 'test'));
$app->route('/admin', array('MainController', 'admin'));
$app->route('GET /contacts', array('ContactController', 'get'));
$app->route('POST /contact', array('ContactController', 'save'));
$app->map('notFound', array('MainController', 'notFound'));

$app->start();