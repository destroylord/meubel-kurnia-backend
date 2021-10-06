<?php
namespace app\core;

use app\core\Request;

class Router  
{

    public Request $request;
    protected array $routers = [];

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }
    public function resolve()
    {
        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->routes[$method][$path] ?? false;

        if ($callback === false) {
            echo "404 Not Found";
            exit;
        } 

        echo call_user_func($callback);
        

        // echo '<pre>';
        // var_dump($callback);
        // echo '</pre>';
        // exit;
    }
}
