<?php

class Router
{
    private $routes = [];

    public function register($path, $handler)
    {
        $this->routes[$path] = $handler;
    }

    public function resolve($path)
    {
        if (empty($this->routes[$path])) {
            echo '404 - ' . $path;
            return;
        }
        $this->routes[$path]();
    }
}

return new Router;
