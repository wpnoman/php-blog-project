<?php 

class Validatator{
    
    function require( $value ){
        if( strlen($value) === 0 ){
            return true;
        }
        return false;
    }

    function word_lenths( $value, $max = 100, $min = 10 ){
        if( strlen($value) >= $max ||  strlen($value) < $min ){
            return true;
        }
        return false;
    }
}