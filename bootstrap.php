<?php

use Core\App;
use Core\Container;
use Core\Database;
use Core\Validator;

$container = new Container();

$container->bind( 'Core\Database', function(){
    $db_config = require '../config.php';
    return new Database( $db_config );
});

$container->bind( 'Core\Validator', function(){
    return new Validator;
});

App::setContainer($container);