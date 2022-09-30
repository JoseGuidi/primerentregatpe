<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class LogInView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); // inicializo Smarty
    }

    function displayLogIn(){
        $this->smarty->display('login.tpl');
    }
    function displayHomeAdmin(){
        $this->smarty->display('homeAdmin.tpl');
    }
}