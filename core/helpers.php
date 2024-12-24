<?php
    namespace Core;
    
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

        static function redirect( $url ){
            header('location: ' . $url );
            exit;
        }

        static function is_login( $redirect = '/'){
            if( isset( $_SESSION['admin_logged_in'] ) && !empty($_SESSION['user_id']) ){
    
                // redirect to admin
                Helpers::redirect( Helpers::admin_url('/' ) );
            }
        }

        static function authorize_admin(){
            if( !isset( $_SESSION['admin_logged_in'] ) && empty($_SESSION['user_id']) ){
    
                // redirect to admin
                Helpers::redirect( '/login'  );
            } 
        }

        static function author_name( $user_id ){
            $db = App::resolve('Core\Database');
            return $db->query('SELECT name FROM users WHERE id = :user_id', [
                'user_id' => $user_id
            ])->find()['name'];
        }

    }