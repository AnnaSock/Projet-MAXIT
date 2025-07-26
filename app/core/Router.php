<?php
namespace Aks\App\Core;

use function Aks\App\Config\dd;


class Router {
    public static function resolve() {
        $routes = require __DIR__ . '/../../routes/route.web.php';
        $middlewares = require_once __DIR__ . "/../config/middlewares.php";

        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        
        if (array_key_exists($uri, $routes)) {
            if (!empty($routes[$uri]['middlewares'])) {
                foreach ($routes[$uri]['middlewares'] as $middlewareName) {
                    if (array_key_exists($middlewareName, $middlewares)) {
                        $middlewareClass = $middlewares[$middlewareName];
                        $middlewareInstance = new $middlewareClass();
                        if (is_callable($middlewareInstance)) {
                            $middlewareInstance();  
                        }
                    }
                }
            }

            $controllerName = $routes[$uri]['controller'];
            $action = $routes[$uri]['action'];

            $controller = App::get($controllerName);
            $controller->$action();
        } else {
            header("Location: /error/404");
            exit;
        }
    }
}
