<?php

$db_config = require '../config.php';
$db = new Database( $db_config );
$posts = $db->query( 'SELECT * from posts')->get();
// $category = $db->query( 'SELECT * from category')->get();

require Helpers::base_path('views/admin/index.view.php');