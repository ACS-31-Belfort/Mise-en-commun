<?php

class UsersController extends Controller
{
    /**
     *
     * @var [Array/String] $args : arguments passed in the URL
     * @var [Object of class UsersModel] $model
     * @var [String] $name : the page name to be displayed in browser tab
     */

    private $args;
    private $model;
    protected $name = "Users";

    /**
     * constructor only creates new Model of corresponding class.
     */
    public function __construct()
    {
        return $this->model = new UsersModel();
    }

    /**
     * @method mixed index()
     * 
     * This method get all users from model method and renders the index view.
     */
    public function index()
    {
        $data = $this->model->getAllUsers();
        $this->render('users/index', $data);
    }

    /**
     * @method mixed delete()
     * 
     * This method deletes one user given an ID.
     */
    public function delete()
    {
        $this->args = func_get_args();
        echo "delete 1 user";
    }


    /**
     * @method mixed api()
     * 
     * @static Api::get()
     * @static Api::put()
     * @static Api::post()
     * @static Api::delete()
     * 
     * Big wrapper for all api functions on the users page.
     */
    public function api()
    {
        $this->args = func_get_args()[0];
        if (!empty($this->args)) {
            // required GET function
            if ($this->args[0] === "get") {
                // required one occurence
                if (isset($this->args[1]) && $this->args[1] !== null) {
                    Api::get($this->model, "getOneUser", $this->args[1]);
                }
                // required all occurences
                else {
                    Api::get($this->model, "getAllUsers");
                }
            }
        } else {
            header('HTTP/1.1 400 Bad Request');
            echo "The request you performed could not be completed. Please contact the administrator of this website for further information.";
            die;
        }
    }
}