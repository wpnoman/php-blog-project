<?php 

namespace Core;
use Core\Helpers;

class Router{

    protected $routes = [];
    
    public function __construct(){
        
    }
    function get($uri, $controller){
        $this->add( 'GET', $uri, $controller ); 
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
            'method' => $method
        ];

    }

    function route( $uri, $method ){

        foreach ( $this->routes as $route ){
            if( $uri == $route['uri'] && $method == $route['method'] ){
                return require Helpers::base_path( $route['controller'] );
            }
        }


        Helpers::abort();
    }
}