<?php

spl_autoload_register(function ($class) {
    if (file_exists("../app/controllers/$class.php")) {
        include_once "../app/controllers/$class.php";
    } elseif (file_exists("../app/models/$class.php")) {
        include_once "../app/models/$class.php";
    }
});

class Router
{
    private $routes = [];

    public function add($uri, $controller, $getMethod = 'index', $postMethod = null)
    {
        $this->routes[$uri] = ['controller' => $controller, 'getMethod' => $getMethod, 'postMethod' => $postMethod];
    }

    public function dispatch($uri, $requestMethod)
    {
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = trim($uri, '/');

        if (isset($this->routes[$uri])) {
            $route = $this->routes[$uri];
            $controllerName = $route['controller'];
            $controller = new $controllerName();

            if ($requestMethod === 'POST' && isset($route['postMethod'])) {
                $method = $route['postMethod'];
                $controller->$method($_POST);
            } elseif ($requestMethod === 'GET') {
                $method = $route['getMethod'];
                $controller->$method($_GET);
            } else {
                http_response_code(405);
                echo "No method to handle $requestMethod request";
            }
        } else {
            http_response_code(404);
            echo "404 - Page Not Found";
        }
    }
}

// 路由設置
$router = new Router();
$router->add('login', 'LoginController', 'index', 'handleLogin');
$router->add('', 'LoginController');
$router->add('home', 'HomeController');
$router->add('problems', 'ProblemsController', 'showProblem');
$router->add('discuss', 'DiscussController');
$router->add('contest', 'ContestController');

$requestUri = $_SERVER['REQUEST_URI'];
$scriptName = dirname($_SERVER['SCRIPT_NAME']);
$uri = str_replace($scriptName, '', $requestUri);
$uri = trim($uri, '/');

$router->dispatch($uri, $_SERVER['REQUEST_METHOD']);