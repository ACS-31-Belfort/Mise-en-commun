<?php

class Users extends Controller
{

    private $name = "Users";

    public function getCtName(){
        return $this->name;
    }

    public function write(String $message)
    {
        echo $message;
    }
}
