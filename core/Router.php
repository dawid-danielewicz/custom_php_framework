<?php

class Router
{
    protected $routes = [
        'GET' => [],
        'POST' => []
    ];

    public function get($uri, $controller) {
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri, $controller) {
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $method) {
        if (array_key_exists($uri, $this->routes[$method])) {
             return $this->callAction(...explode('@', $this->routes[$method][$uri]));
        }

        throw new Exception('No route is defined for this uri');
    }

    public function callAction($controller, $action) {
        $controller = new $controller;

        if (!method_exists($controller, $action)) {
            throw new Exception("There is no method {$action} defined in {$controller} controller");
        }

       $controller->$action();
    }
}