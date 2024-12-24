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
    $router->get('/admin-panel/create-post/', 'controllers/admin-panel/actions/create-post.php');
    
    // deleting post
    $router->delete('/admin-panel/', 'controllers/admin-panel/actions/destroy.php');

    // editing post
    $router->get( '/admin-panel/edit-post', 'controllers/admin-panel/actions/edit-post.php' );
    $router->patch( '/admin-panel/edit-post', 'controllers/admin-panel/actions/update-post.php' );


    // login register
    $router->get('/login', 'controllers/login.php' );
    $router->post('/login', 'controllers/admin-panel/actions/manage-login.php' );

    $router->get('/registration', 'controllers/registration.php');
    $router->post('/registration', 'controllers/admin-panel/actions/manage-registration.php');