<?php
require_once 'app/views/login.view.php';
require_once 'app/models/login.model.php';
class LogInController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model=new LogInModel();
        $this->view=new LogInView();
    }
    function showHome(){
            $this->view->displayLogIn();
    }
    function registerAdmin(){
        
    }
}