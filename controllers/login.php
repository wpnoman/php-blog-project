<?php

use Core\Helpers;


// check if already login
Helpers::is_login();

// load the view
Helpers::view( 'login' );