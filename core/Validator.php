<?php 

namespace Core;

class Validator{
    
    function require( $value ){
        if( strlen($value) === 0 ){
            return true;
        }
        return false;
    }

    function word_lenths( $value, $max = 100 ){
        if( strlen($value) > $max ){
            return true;
        }
        return false;
    }

    function email( $email ){
        if ( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            return true;
        }
        return false;
    }
}