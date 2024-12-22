<?php


const BASE_PATH =  '../';


spl_autoload_register( function($class){


    $class = str_replace( '\\', DIRECTORY_SEPARATOR, $class);


    require BASE_PATH . $class.'.php';
} );


$router = new \Core\Router();
$routes = require \Core\Helpers::base_path('views/router.php');

// get request URI
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// send request URL
$router->route( $uri, $method);

// Helpers::dd(['hello', 'hadd']);