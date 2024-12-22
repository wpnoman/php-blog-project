<?php 

use core\Helpers;
use core\Database;
use core\Response;

session_start();
    // redirect if slug is empty or not set
    if( !isset($_GET['slug']) ){
        Helpers::abort();
    }
    
    if( empty( $_SESSION["user_id"] ) ){
        Helpers::abort( Response::FORBIDDEN );
    }

    $current_user = $_SESSION["user_id"];

    $db_config = require '../config.php';
    $db = new Database( $db_config );
    
    // get slug
    $slug = htmlspecialchars( $_GET['slug'] );

    $post = $db->query( 'SELECT * FROM posts WHERE slug = :slug', [
        'slug' => $slug
    ])->findOrFail();

    Helpers::authorize( $current_user == $post['user_id']);

    include '../public/views/details.view.php';