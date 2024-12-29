<?php 

namespace Core;
use Core\Helpers;
use Core\Middleware\Middleware;

class Router{

    protected $routes = [];
    
    public function __construct(){
        
    }
    function get($uri, $controller){
        $this->add( 'GET', $uri, $controller ); 

        return $this;
    }
    function delete($uri, $controller){
        $this->add( 'DELETE', $uri, $controller ); 
    }
    function post($uri, $controller){
        $this->add( 'POST', $uri, $controller ); 
    }
    function put($uri, $controller){
        $this->add( 'PUT', $uri, $controller ); 
    }
    function patch($uri, $controller){
        $this->add( 'PATCH', $uri, $controller ); 
    }

    function add( $method, $uri, $controller ){

        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method,
            'middlewire' => null
        ];

    }

    function route( $uri, $method ){

        foreach ( $this->routes as $route ){
            if( $uri == $route['uri'] && $method == $route['method'] ){

                // check middlewire
                Middleware::resolve( $route['middlewire']);

                return require Helpers::base_path( $route['controller'] );
            }
        }


        Helpers::abort();
    }

    public function only( $key ){
        // update middlewire
        $this->routes[array_key_last($this->routes)]['middlewire'] = $key;
        
        return $this;
    }
}