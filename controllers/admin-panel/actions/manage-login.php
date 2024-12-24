<?php

use Core\Helpers;
use Core\App;

$validator = App::resolve('Core\Validator');
$db = App::resolve('Core\Database');

$error = [];
$email = $_POST['email'];
$password = $_POST['password'];

if( $validator->email( $email) ){
    $error ['email'] = 'Please enter a valid email address';
}

if( $validator->require( $password) ){
    $error ['password'] = 'Password can\'t be empty';
}

if( count( $error ) ){
    return Helpers::view( 'login', [
        'error' => $error
    ] );
}

$user = $db->query('SELECT * from users where email=:email AND password=:password',[
    'email' => $email,
    'password' => $password
])->find();

if( empty( $user ) ){
    $error['notfound'] = 'Username or Password is wrong';
}

if( count( $error ) ){
    return Helpers::view( 'login', [
        'error' => $error
    ] );
}

if( !empty($user) ){
    $_SESSION["user_id"] = $user['id'];
}