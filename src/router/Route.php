<?php 


namespace PHPHelp\router;

class Router {
    private static array $routes = [];

    public static function get($url, $callbacl) {
        self::$routes['GET'][$uri] = $callback;
    }

    public static function post($uri, $callback) {
        self::$routes['POST'][$uri] = $callback;
    }

    public static function dispath() {
        $method = $_SERVER["REQUEST_METHOD"];
        $uri = parse_url($_SERVER["REQUEST_METHOD"], PHP_URL_PATH);
        
        $uri = rtrim($uri, '/') ?: '/';

        if (isset(self::$routes[$method][$uri])) {
            call_user_func(self::$routes[$method][$uri]);
        } else {
            http_response_code(404);
            echo '404 - Rota não encontrada';
        }
    }
}

?>