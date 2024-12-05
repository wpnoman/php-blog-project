<?php 

class Database{

    // db connection
    public $conn;

    public function __construct( $dsn, $username = 'root', $password = '' ){

        // dsn
        $dsn_build = 'mysql:' . http_build_query( $dsn, '', ';');
        
        // instance PDO
        $this->conn = new PDO($dsn_build, $username, $password);
       
    }

    public function query( $q, $params = [] ){
        $statement = $this->conn->prepare($q);
        $statement->execute($params);

        return $statement;
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