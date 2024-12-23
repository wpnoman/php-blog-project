<?php

use Core\App;
use Core\Container;
use Core\Database;

$container = new Container();

$container->bind( 'Core\Database', function(){
    $db_config = require '../config.php';
    return new Database( $db_config );
});

App::setContainer($container);