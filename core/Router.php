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
            Application::$app->response->setStatusCode(404);
            return "404 Not Found";
            exit;
        } 
        if (is_string($callback)) {
            return $this->renderView($callback);
        }

        echo call_user_func($callback);
    }

    public function renderView($view)
    {
        $layoutsContent = $this->layoutContent();
        $viewContent    = $this->renderOnlyView($view);
        return str_replace('{{content}}', $viewContent, $layoutsContent);
    }
    
    protected function layoutContent()
    {
        ob_start();
        // var_dump(Application::$ROOT_DIR);
        include_once Application::$ROOT_DIR. "/views/layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        include_once Application::$ROOT_DIR. "/views/$view.php";
        return ob_get_clean();
    }
}
