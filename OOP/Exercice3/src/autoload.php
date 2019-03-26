<?php

spl_autoload_register(
    function($className){
        $file=__DIR__.'/'.$className.'.php';
        if(is_file($file)){
            require_once $file;
        }
    }
);

