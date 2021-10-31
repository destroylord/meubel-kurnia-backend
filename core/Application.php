<?php 
namespace app\core;

class Application {
    
    public static string $ROOT_DIR;
    public Router $router;
    public Request $request;
    public Response $response;
    public static Application $app;
    public Controller $controller;

    public function __construct($rootPath, array $config)
    {
        self::$ROOT_DIR = $rootPath;
        self::$app = $this;

        $this->request  = new Request();
        $this->response = new Response();
        $this->router   = new Router($this->request, $this->response);

        $this->db = new Database($config['db']);
    }

    public function getController(): \app\core\Controller //getter class
    {
        return $this->controller;
    }
    
    public function setController(\app\core\Controller $controller): void //setter class
    {
        $this->controller = $controller;
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}