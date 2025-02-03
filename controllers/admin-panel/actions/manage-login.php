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

// get the password
$user = $db->query('SELECT * from users where email=:email ',[
    'email' => $email
])->find();

// if email not found
if( empty( $user )){
    $error['email'] = 'Email not exits';

    return Helpers::view( 'login', [
        'error' => $error
    ] );
}

$hass_pass = $user['password'];

if( ! password_verify( $password, $hass_pass ) ){
    $error['password'] = 'Password is wrong';

    return Helpers::view( 'login', [
        'error' => $error
    ] );
}

Helpers::login();

Helpers::redirect( Helpers::admin_url('/') );