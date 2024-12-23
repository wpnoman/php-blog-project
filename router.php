<?php 

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

    // register routes
    $router->get('/', 'controllers/index.php');
    $router->get('/list', 'controllers/list.php');
    $router->get('/admin-panel/', 'controllers/admin-panel/admin.php');
    $router->get('/admin-panel/create-blog/', 'controllers/admin-panel/create-blog.php');