<?php
class Router {
    private $routes;

    public function __construct() {
        $this->routes = [];
    }

    public function run (string $request_uri) {
        $uri = parse_url($request_uri);
        $path = $uri['path'];
        if (false === array_key_exists($path, $this->routes)) {
            return;
        }
        else {
            $callback = $this->routes[$path];
            $params = [];
            if (!empty($uri['query'])) {
                parse_str($uri['query'], $params);
            }
            $callback($params);
        }
    }

    public function addRoute ($path, $path_to_include) {
        $this->routes = [
            $path => function() use ($path_to_include) {
                include_once(__DIR__ .$path_to_include);
            }
        ];
        $this->run($_SERVER['REQUEST_URI']);
    }
}