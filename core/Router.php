<?php
class Router{

    public $routes = [

        'GET' => [],
        'POST' => [],
    ];
    public static function load($file){
        $router = new Router;
        require $file;
        return $router;
    }

    // public function define($routes){
    //     $this->routes = $routes;
    // }

    public function get($uri , $controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri , $controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri, $requestType){
        // die(var_dump($uri , $requestType));

        if(array_key_exists($uri, $this->routes[$requestType])){
            // die($this->routes[$requestType][$uri]);

            $this->callAction();
        }
        throw new Exception('No route defined for this uri');
    }

    protected function callAction($controller, $action){

        if(!method_exists($controller, $action)){
            throw new Exception(
                "{$controller} does not respond to the {$action} action."
            );
        }

        return (new $controller)->action();
    }

}


