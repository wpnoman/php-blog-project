<?php


// submit category
if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    $category_name = htmlspecialchars($_POST['category_name']);
    $category_slug = htmlspecialchars($_POST['category_slug']);

    
}

// print_r($_REQUEST);

require '../public/views/admin-panel/manage-category.view.php';