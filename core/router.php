<?php 

$request_url =  parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '../public/views/index.view.php',
    '/list' => '../public/views/list.view.php',
    '/details' => '../public/views/details.view.php',
];

if( array_key_exists( $request_url, $routes ) ){
    require $routes[$request_url];
}else{
    require '../public/views/404.view.php';
}

//echo '<pre>';
//print_r($url);