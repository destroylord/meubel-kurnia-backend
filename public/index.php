<?php

use app\core\Application;


$app = new Application(dirname(__DIR__));

$app->router->get('/', function(){
    return 'Hello World';
});
// $app->router->get('/contact', function(){
//     return 'Contact';
// });

$app->router->get('/','welcome');
$app->router->get('/books','books');
$app->router->get('/contact','contact');

$app->run();