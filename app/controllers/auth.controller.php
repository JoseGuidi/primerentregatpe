<?php
require_once 'app/views/auth.view.php';
require_once 'app/models/user.model.php';
require_once 'app/helpers/AuthHelper.php';
class AuthController{
    private $authHelper;
    private $model;
    private $view;
    function __construct()
    {
        $this->authHelper= new AuthHelper();
        $this->model=new UserModel();
        $this->view=new AuthView();
        
    }
   function showLogin(){
    
    $this->view->displayLogIn($this->authHelper->isLogged());
   }
   function validatePassword(){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user = $this->model->getUserByName($username);

        if($user && (password_verify($password,$user->contrasenia))){
            session_start();
            $_SESSION['USER_ID'] = $user->id_usuario;
            $_SESSION['USER_NAME'] = $user->nombre_usuario;
            $_SESSION['IS_LOGGED'] = true;
            header('Location: ' . BASE_URL);
        }else{
            $this->view->displayLogIn($this->authHelper->isLogged(),true);
        }
    }

    function logoutUser(){
        $this->authHelper->logoutUser();
        header('Location: ' . BASE_URL);
    }
}