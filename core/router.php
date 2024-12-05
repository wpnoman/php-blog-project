<?php 

$request_url =  parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '../public/views/index.view.php',
    '/list' => '../public/views/list.view.php',
    '/details' => '../controllers/details.php',
];

if( array_key_exists( $request_url, $routes ) ){
    require $routes[$request_url];
}else{
    abort();
}

//echo '<pre>';
//print_r($url);