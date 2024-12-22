<?php

    class Helpers{

        static function isUrl(){
            $url = $_SERVER;
            return  $url['SCRIPT_NAME'];
        }

        static function dd($v){
            echo '<pre>';
            print_r($v);
            echo '</pre>';
        }
    
        static function abort( $status = 404 ){
            http_response_code( response_code: $status );

            self::view($status);
            

            die();

        }

        static function authorize( $condision, $status = Response::FORBIDDEN){
            if( ! $condision ){
                self::abort( $status );
            }
        }

        static function admin_url( $path = '/' ){
            $admin_url = '/admin-panel' . $path ;

            return $admin_url;
        }

        static function view( $path, $attributes = [] ){

            extract($attributes );
            // dd( __DIR__ );
            require self::base_path("views/{$path}.view.php");
        }
        
        static function base_path( $path ){
            return BASE_PATH . $path;
        }
    }