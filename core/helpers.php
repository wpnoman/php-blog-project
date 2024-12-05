<?php

    function isUrl(){
        $url = $_SERVER;
        return  $url['SCRIPT_NAME'];
    }

    function dd($v){
        echo '<pre>';
        print_r($v);
        echo '</pre>';
    }
   
    function abort( $status = 404 ){
        http_response_code( $status );

        require "../public/views/{$status}.view.php";

        die();

    }

