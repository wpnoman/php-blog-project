<?php 

namespace Core\Middleware;

use Core\Helpers;

class Authenticated{

    public function handle(){
        if( ! $_SESSION['user_id'] ){
            Helpers::redirect('/login');
        }
    }
}