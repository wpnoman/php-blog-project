<?php 

$request_url =  parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '../public/views/index.view.php',
    '/list' => '../public/views/list.view.php',
    '/details' => '../controllers/details.php',
    '/admin-panel' => '../controllers/admin-panel/admin.php',
    '/admin-panel/create-blog' => '../controllers/admin-panel/create-blog.php',
    '/admin-panel/manage-category' => '../controllers/admin-panel/manage-category.php',
];

if( array_key_exists( $request_url, $routes ) ){
    require $routes[$request_url];
}else{
    abort();
}