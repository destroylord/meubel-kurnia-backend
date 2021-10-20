<?php

use app\core\Application;
use app\controllers\SiteController;

$app = new Application(dirname(__DIR__));

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

$app->run();