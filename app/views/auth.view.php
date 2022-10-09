<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class AuthView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
        session_start(); //unica forma que me funciono para que funcione el $smarty.session
    }

    function displayLogIn($error = false){
        $this->smarty->assign('error',$error);
        $this->smarty->display('login.tpl');
    }
   
}