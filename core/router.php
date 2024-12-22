<?php 

// $request_url =  parse_url($_SERVER['REQUEST_URI'])['path'];

// $routes = [
//     '/' => '../controllers/index.php',
//     '/list' => '../public/views/list.view.php',
//     '/details' => '../controllers/details.php',
//     '/admin-panel/' => '../controllers/admin-panel/admin.php',
//     '/admin-panel/create-blog/' => '../controllers/admin-panel/create-blog.php',
//     '/admin-panel/manage-category/' => '../controllers/admin-panel/manage-category.php',
//     '/registration/' => '../controllers/admin-panel/registration.php',
//     '/login/' => '../controllers/admin-panel/login.php',
// ];

// if( array_key_exists( $request_url, $routes ) ){
//     require $routes[$request_url];
// }else{
//     Helpers::abort();
// }

namespace Core;
use Core\Helpers;

class Router{

    protected $routes = [];
    
    public function __construct(){
        
    }
    function get($uri, $controller){
        $this->add( 'GET', $uri, $controller ); 
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