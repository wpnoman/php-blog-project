<?php 

const BASE_PATH =  '../';

require '../core/helpers.php';
require '../core/Response.php';
require '../core/Database.php';


spl_autoload_register( function($classes){
    require BASE_PATH . 'core/' . $classes;
} );

require '../core/router.php';

// Helpers::dd(['hello', 'hadd']);