<?php

use Core\Database;
use Core\Helpers;
use Core\Validator;

require '../core/Validator.php';

$title = 'Create Post';
$db_config = require '../config.php';
$db = new Database( $db_config );
$validator = new Validator();
// $posts = $db->query( 'SELECT * from posts')->get();
$category = $db->query( 'SELECT * from category')->get();

$current_user_id = 2;

// init errors
$error = [];

// submit category
if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    // post values
    $post_title =       htmlspecialchars($_POST["post_title"]);
    $post_slug =  strtolower( str_replace( ' ', '-', $post_title )) ;
    $post_author =      intval($current_user_id );
    $publish_date =     htmlspecialchars($_POST["post_publish_date"]);
    $post_content =     $_POST["post_content"];
    $post_category =    intval( $_POST["post_category"] );

    if( $validator->require($post_title ) ){
        $error['title'] = 'Title can\'t be empty';
    }

    if( $validator->word_lenths( $post_title ) ){
        $error['title'] = 'Max title lenght should be less then 100';
    }


    if( empty( $error ) ){
        // insert category
        $db->query( 'INSERT into posts ( name, slug, content, created_at, post_status, user_id, post_category ) VALUES( :name, :slug, :content, :created_at, :post_status, :user_id, :post_category )', [
            'name' =>  $post_title,
            'slug' => $post_slug,
            'content' => $post_content,
            'created_at' => $publish_date,
            'post_status' => 'active',
            'user_id' => $post_author,
            'post_category' => $post_category
        ] ) ;
    }
    
}

Helpers::view( 'admin/create-post', [
    'error' => $error,
    'category' => $category,
    'title' => $title
] );