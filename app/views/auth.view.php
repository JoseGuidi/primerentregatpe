<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class AuthView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }

    function displayLogIn($error = false){
        session_start();    //en cada funcion que use head.tpl, tengo que usar esto. LAS ABM ya lotienen del AuthHelper
        $this->smarty->assign('error',$error);
        $this->smarty->display('login.tpl');
    }
   
}