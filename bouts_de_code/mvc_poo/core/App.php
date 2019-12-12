<?php 

class App {

    // 1. constructor
    public function __construct()
    {
        //2. URL parser
        if(isset($_GET['url'])){
            $tokens = explode('/', rtrim($_GET['url'], '/'));
            //2A. controller
            $controller = ucfirst(array_shift($tokens));
            if(file_exists('Controllers/'.$controller.'Controller.php')){
                $controller = new $controller;
                //2B. Method if tokens is not empty
                if(!empty($tokens)){
                    $method = array_shift($tokens);
                    if(method_exists($controller, $method)){
                        echo "method used : " . $method;
                        //2C. parameters
                        var_dump(func_get_args($controller->$method()));
                        $controller->{$method}(@$tokens);
                        
                    }
                    else{
                        //method not found... calling index() instead;
                        echo "method not found... Calling index() from Controller class instead.<br>";
                        $controller->index('Home');
                    }
                }
                else{
                    //tokens is empty (no method specified), method called: index()
                    echo "no method specified... Calling index() from Controller class instead.<br>";
                    $controller->index($controller->getCtName());
                }
            }
            else{
                //controller not found; call home controller.
                echo "Controller not found... Calling Home controller and index() method instead.<br>";
                $controller = 'home';
                $controller = new $controller;
                $controller->index('Home');
            }
        }
        else{
            //no url has been passed, calling home controller
            echo "no url parsed... Calling Home controller and index() method instead.<br>";
            $controller = 'home';
            $controller = new $controller();
            $controller->index('Home');
        }
    }
}