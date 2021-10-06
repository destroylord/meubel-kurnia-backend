<?php

use app\core\Application;

$app = new Application();

$app->router->get('/', function(){
    return 'Hello World';
});
$app->router->get('/contact', function(){
    return 'Contact';
});
$app->router->get('/books', function(){
    return 'Books';
});

$app->run();