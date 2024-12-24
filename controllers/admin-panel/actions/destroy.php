<?php

use Core\App;
use Core\Database;
use Core\Helpers;

$db = App::resolve(Database::class );

$current_user_id = 1;

// check if post available
$post = $db->query( 'select * from posts where id=:id', [ 'id' => $_POST['post_id']])->findOrFail();

// check authorization
Helpers::authorize( $post['user_id'] == $current_user_id );

// delete the post
$db->query('delete from posts where id=:id', [ 'id' => $_POST['post_id']]);

//redirect
header('location: /admin-panel/');
exit();