
<?php 

    // redirect if slug is empty or not set
    if( !isset($_GET['slug']) ){
        abort();
    }

    $current_user = 1;

    $db_config = require '../config.php';
    $db = new Database( $db_config );
    
    // get slug
    $slug = htmlspecialchars( $_GET['slug'] );

    $post = $db->query( 'SELECT * FROM posts WHERE slug = :slug', [
        'slug' => $slug
    ])->findOrFail();

    authorize( $current_user == $post['user_id']);

    include '../public/views/details.view.php';