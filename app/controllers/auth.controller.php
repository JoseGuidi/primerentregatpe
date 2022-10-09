<?php
require_once 'app/views/auth.view.php';
require_once 'app/models/user.model.php';
class AuthController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model=new UserModel();
        $this->view=new AuthView();
    }
   function showLogin(){
    $this->view->displayLogIn();
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
            
        }else{
            $this->view->displayLogIn(true);
        }
    }

    function logoutUser(){
        session_start();
        session_destroy();
        header('Location' . BASE_URL);
    }
}