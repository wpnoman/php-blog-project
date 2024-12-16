<?php

$db_config = require '../config.php';
$db = new Database( $db_config );
// $posts = $db->query( 'SELECT * from posts')->get();
$category = $db->query( 'SELECT * from category')->get();

$current_user_id = 2;

// submit category
if( $_SERVER['REQUEST_METHOD'] == 'POST'){

    // init errors
    $error = [];

    // post values
    $post_title =       htmlspecialchars($_POST["post_title"]);
    $post_slug =  strtolower( str_replace( ' ', '-', $post_title )) ;
    $post_author =      intval($current_user_id );
    $publish_date =     htmlspecialchars($_POST["post_publish_date"]);
    $post_content =     $_POST["post_content"];
    $post_category =    intval( $_POST["post_category"] );

    if( strlen(trim($post_title) ) == 0 ){
        $error['title'] = 'Title can\'t be empty';
    }

    if( strlen($post_title ) > 100 ){
        $error['title'] = 'Max title lenght should be less then 100';
    }


    if( empty( $error ) ){
        // insert category
        $db->query( 'INSERT into posts ( name, slug, content, created_at, post_status, user_id ) VALUES( :name, :slug, :content, :created_at, :post_status, :user_id )', [
            'name' =>  $post_title,
            'slug' => $post_slug,
            'content' => $post_content,
            'created_at' => $publish_date,
            'post_status' => 'active',
            'user_id' => $post_author
        ] ) ;
    }
    
}

require '../public/views/admin-panel/create-blog.view.php';