<?php

use app\core\Application;
use app\controllers\AuthController;
use app\controllers\SiteController;


$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$config = [
    'db' => [
        'dsn'       => $_ENV['DB_DSN'],
        'user'      => $_ENV['DB_USER'],
        'password'  => $_ENV['DB_PASSWORD'],
    ]
];

$app = new Application(dirname(__DIR__), $config);

$app->router->get('/', function(){
    return 'Hello World';
});
// $app->router->get('/contact', function(){
//     return 'Contact';
// });

$app->router->get('/',[SiteController::class, 'welcome']);
$app->router->get('/books','books');
$app->router->get('/contact', [SiteController::class, 'contact']);
$app->router->post('/contact',[SiteController::class, 'handlerContact']);

$app->router->get('/login',[AuthController::class, 'login']);
$app->router->post('/login',[AuthController::class, 'proccess_login']);
$app->router->get('/register',[AuthController::class, 'register']);
$app->router->post('/register',[AuthController::class, 'register']);

$app->run();