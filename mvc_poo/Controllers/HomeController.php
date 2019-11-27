<?php

class Home extends Controller
{

    private $name = "Home";

    public function getCtName(){
        return $this->name;
    }

    public function write(String $message)
    {
        echo $message;
    }
}
