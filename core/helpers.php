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

    function authorize( $condision, $status = Response::FORBIDDEN){
        if( ! $condision ){
            abort( $status );
        }
    }

    function admin_url( $path = '/' ){
        $admin_url = '/admin-panel' . $path ;

        return $admin_url;
    }