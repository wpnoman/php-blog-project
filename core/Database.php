<?php 

class Database{
    function __construct( $dsn, $username = 'root', $password = '' ){
        $dsn_build = 'mysql:' . http_build_query( $dsn, '', ';');
        
        $conn = new PDO($dsn_build, $username, $password);
        
        print_r($dsn_build);    
    }
}



/// table infor for post

// id 
// name
// slug
// content
// created_at
// updated_at
// Post_status
// delated_at