<?php

use Core\Helpers;
use Core\App;

$validator = App::resolve('Core\Validator');
$db = App::resolve('Core\Database');

$error = [];

$full_name  = htmlspecialchars($_POST['name']);
$email      = $_POST['email'];
$password   = $_POST['password'];

if( $validator->require( $full_name) ){
    $error['name'] = 'Name can\'t be empty';
}

if( $validator->email( $email) ){
    $error['email'] = 'Invalid email format';
}

if( $validator->require( $password) ){
    $error['password'] = 'Password can\'t be empty';
}

if( count( $error ) ){
    return Helpers::view( 'registration', [
        'error' => $error
    ] );
}

// check if email exists

$user = $db->query( 'SELECT email FROM users WHERE email=:email', [ 'email' => $email ])->find();

if( $user ){
    $error['email'] = 'Email is already exists';
}

if( count( $error ) ){
    return Helpers::view( 'registration', [
        'error' => $error
    ] );
}

$user = $db->query("INSERT INTO users ( name,password,email) VALUES( :name, :password, :email )", [
    'name' => $full_name,
    'password' => password_hash($password, PASSWORD_DEFAULT),
    'email' => $email
]);

// get author id
$user_id = $db->query( 'SELECT id FROM users WHERE email=:email', [ 'email' => $email ])->find();

// update the session
$_SESSION['admin_logged_in'] = true;
$_SESSION['user_id'] = intval($user_id);

// redirect to admin
Helpers::redirect( Helpers::admin_url('/') );