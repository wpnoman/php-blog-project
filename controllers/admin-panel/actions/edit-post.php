<?php

use Core\App;
use Core\Database;
use Core\Helpers;

$db = App::resolve( Database::class );

// check if post id is given and exists
if( !isset( $_GET['post_id']) ){
    Helpers::abort();
}

$post = $db->query('select * from posts where id = :post_id',[
    'post_id' => $_GET['post_id']
])->findOrFail();

// get current author UserID
$current_user_id = 1;


// checking authorization
Helpers::authorize( $current_user_id == $post['user_id']);

// get the categories
$category = $db->query( 'SELECT * from category')->get();


Helpers::view( 'admin/edit-post', [
    'post' => $post,
    'category' => $category
] );