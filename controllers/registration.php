<?php

use Core\Helpers;

Helpers::is_login();

// load the view
Helpers::view( 'registration' );