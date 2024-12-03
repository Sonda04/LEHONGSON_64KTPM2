<?php

class Route {
    private static $routes = []; // Store all routes

    // Show all registered routes
    public static function showRoutes() {
        return self::$routes;
    }

    // Add a new route
    public static function add($uri, $controller) {
        $uri = '#^' . $uri . '$#'; // Properly construct the regex
        self::$routes[] = ['uri' => $uri, 'controller' => $controller];
    }

    // Dispatch the request to the appropriate controller and method
    public static function dispatch($uri) {
        foreach (self::$routes as $route) {
            if (preg_match($route['uri'], $uri, $matches)) {
                if (count($matches) > 0) {
                    // Split the controller and method
                    list($controller, $method) = explode('@', $route['controller']);
                    
                    // Assume controller classes are namespaced or properly autoloaded
                    $controllerClass = $controller;
                    
                    // Check if the class exists
                    if (!class_exists($controllerClass)) {
                        throw new Exception("Controller $controllerClass not found");
                    }

                    // Instantiate the controller
                    $controllerInstance = new $controllerClass();

                    // Check if the method exists in the controller
                    if (!method_exists($controllerInstance, $method)) {
                        throw new Exception("Method $method not found in controller $controllerClass");
                    }

                    // Call the method
                    $controllerInstance->$method();

                    return;
                }
            }
        }

        // If no route matches, throw a 404
        throw new Exception("No route found for URI: $uri");
    }
}
?>
