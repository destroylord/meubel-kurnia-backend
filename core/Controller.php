<?php
namespace app\core;

use app\core\Application;

class Controller  
{
    public function view($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }
}


?>