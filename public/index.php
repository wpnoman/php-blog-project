<?php 

const BASE_PATH =  '../';


spl_autoload_register( function($class){


    $class = str_replace( '\\', DIRECTORY_SEPARATOR, $class);


    require BASE_PATH . $class.'.php';
} );

require '../core/router.php';

// Helpers::dd(['hello', 'hadd']);