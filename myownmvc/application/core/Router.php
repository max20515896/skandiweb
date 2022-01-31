<?php

namespace application\core;

class Router
{
    private $routes;
    private $controller;
    private $action;

    public function __construct($routes)
    {
        $this->routes = $routes;
    }

    public function match()
    {
        $uri = $_SERVER['REQUEST_URI'];
        foreach ($this->routes as $route) {
            if ($route->path === $uri) {
                $this->controller = $route->controller;
                $this->action = $route->action;
                return true;
            }
        }
        return false;
    }

    public function run()
    {   
        if ($this->match()) {
            $path = 'application\controllers\\' . ucfirst($this->controller) . 'Controller';
            if (class_exists($path)) {
                $action = $this->action;
                if (method_exists($path, $action)) {
                    $controller = new $path($this->controller, $this->action);
                    $controller->$action();
                } else {
                    echo 'Action not found ' . $path;
                }
            } else {
                echo 'Class not found ' . $path;
            }
        } else {
            echo 'not found route';
        }
    }
}