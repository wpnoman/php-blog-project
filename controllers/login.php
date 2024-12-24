<?php

use Core\Helpers;


$error=[];

if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if( $validator->email( $email) ){
        $error ['email'] = 'Invalid email format';
    }

    if( $validator->require( $password) ){
        $error ['password'] = 'Password can\'t be empty';
    }

    if( empty( $error ) ){
        $user = $db->query('SELECT * from users where email=:email AND password=:password',[
            'email' => $email,
            'password' => $password
        ])->find();

        if( !empty($user) ){
            
            $_SESSION["user_id"] = $user['id'];
        }
    }
}

Helpers::view( 'login', [
    'error' => $error
] );