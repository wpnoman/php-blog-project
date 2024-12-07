<?php

$db_config = require '../config.php';
$db = new Database( $db_config );
$category = $db->query( 'SELECT * from category')->get();

// submit category
if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    $category_name =    htmlspecialchars($_POST["category_name"]);
    $category_slug =    htmlspecialchars($_POST["category_slug"]);

    $db->query( 'INSERT into category ( name, slug) VALUES( :name, :slug )', [
        'name' =>  $category_name,
        'slug' => $category_slug
    ] ) ;
    
}

// print_r($_REQUEST);

require '../public/views/admin-panel/manage-category.view.php';