<?php 

spl_autoload_register(
    function ($class_name){
        if(file_exists('core/'.$class_name.'.php')){
            require_once 'core/' .$class_name. '.php';
        }
        else if(file_exists('Controllers/'.$class_name.'Controller.php')){
            require_once 'Controllers/' .$class_name. 'Controller.php';
        }
        else if(file_exists('Models/'.$class_name.'.php')){
            require_once 'Models/' .$class_name. '.php';
        }
        else if(file_exists('Views/'.$class_name.'View.php')){
            require_once 'Views/' .$class_name. 'View.php';
        }
        else if(file_exists($class_name.'.php')){
            require_once $class_name. '.php';
        }
    }
);