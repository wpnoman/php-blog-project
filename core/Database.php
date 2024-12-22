<?php 

namespace Core;
use Core\Helpers;

class Database{

    // db connection
    public $conn;

    public $statement;

    public function __construct( $dsn, $username = 'root', $password = '' ){

        // dsn
        $dsn_build = 'mysql:' . http_build_query( $dsn, '', ';');
        
        // instance PDO
        $this->conn = new \PDO($dsn_build, $username, $password);
       
    }

    public function query( $q, $params = [] ){

        $this->statement = $this->conn->prepare($q);

        $this->statement->execute($params);

        return $this;
    }

    public function get(){
        return $this->statement->fetchAll();
    }

    public function find(){
        return $this->statement->fetch();
    }
    
    public function findOrFail(){
        $result = $this->find();

        if( ! $result ){
            Helpers::abort();
        }

        return $result;
    }
}