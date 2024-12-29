<?php 

namespace Core\Middleware;

class Middleware{

    public const MAP = [
        'auth' => Authenticated::class,
        'guest' => ''
    ];

    public static function resolve( $key ){
        if( ! $key ){
            return;
        }

        $middleware = self::MAP[$key] ?? false;

        if( ! $middleware ){
            throw new \Exception("No Middle ware found named $key");
        }

        ( new $middleware )->handle();
    }
}