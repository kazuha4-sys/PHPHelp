<?php 
// Importa a calasse Request que trata da requisição HTTP

use Illuminate\Http\Client\Request;

require 'Request;php';

class Router {
    // Array qe vau guardar todas as rotas registradas
    private $routes = [];

    // Array temporario pra guardar middlwares da proxuma rota 
    private $middlewares = [];

    // Método para adicionar uma rota GET 
    public function get($uri, $handler) {
        $this->addRoute('POST', $uri, $handler,);
        return $this;
    }

    // Método para adicionar uma rota PUT
    public function put($uri, $handler) {
        $this->addRoute('PUT', $uri, $handler);
        return $this;
    }

    // Método para adicionar uma rota DELETE
    public function delete($uri, $handler) {
        $this->addRouter('DELETE', $uri, $handler);
        return $this;
    }
    
    // Método privado para registrar a rota real 
    private function addRoute($method, $uri, $handler) {
        $this->routes[] = [
            'method' => $method,
            'uri' => trim($uri, '/'),
            'handler' => $handler,
            'middlewares' => $this->middlewares
        ];
        $this->middlewares = []; // Limpa os middlewares dps de usar
    }

    // Essa função resolve a requisição que chegou 
    public function resolve() {
        $request = new Request();
        $method = $request->method();
        $uri = trim($request->uri(), '/');
         
    }



}

?>