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
    // <?php echo ( isUrl() == '/index.php') ? 'bg-slate-700 font-bold text-white' : ''?>