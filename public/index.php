<?php 

const BASE_PATH =  '../';


spl_autoload_register( function($classes){
    require BASE_PATH . 'core/' . $classes.'.php';
} );

require '../core/router.php';

// Helpers::dd(['hello', 'hadd']);