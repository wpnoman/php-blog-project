<?php

use Core\App;
use Core\Helpers;

$db = App::resolve( 'Core\Database' );
$validator = App::resolve('Core\Validator');

// get current author UserID
$current_user_id = 1;

// get the post
$post = $db->query('select * from posts where id = :post_id',[
    'post_id' => $_POST['post_id']
])->findOrFail();


// checking authorization
Helpers::authorize( $current_user_id == $post['user_id']);

// get the categories
$category = $db->query( 'SELECT * from category')->get();

// get updated Values
$post_title =       htmlspecialchars($_POST["post_title"]);
$post_slug =  strtolower( str_replace( ' ', '-', $post_title )) ;
$post_author =      intval($current_user_id );
$publish_date =     htmlspecialchars($_POST["post_publish_date"]);
$post_content =     $_POST["post_content"];
$post_category =    intval( $_POST["post_category"] );

// Validations
$error = [];

if( $validator->require($post_title ) ){
    $error['title'] = 'Title can\'t be empty';
}

if( $validator->word_lenths( $post_title ) ){
    $error['title'] = 'Max title lenght should be less then 100';
}

if( $validator->require($post_content ) ){
    $error['content'] = 'Content can\'t be empty';
}

if( $validator->word_lenths( $post_content, 1000 ) ){
    $error['content'] = 'Max Content lenght should be less then 1000';
}

if( count( $error ) ){
    return Helpers::view( 'admin/edit-post', [
        'post' => $post,
        'error' => $error,
        'category' => $category
    ] );
}

// update the value
$db->query('UPDATE posts SET name=:post_title, slug=:post_slug, created_at=:created_at, post_status=:post_status, post_category=:post_category WHERE id=:id', [
    'post_title' => $post_title,
    'post_slug' => $post_slug,
    'created_at' => $publish_date,
    'post_status' => 'active',
    'post_category' => $post_category,
    'id' => $_POST['post_id']
]);

header( 'location:' . Helpers::admin_url('/'));
exit;
