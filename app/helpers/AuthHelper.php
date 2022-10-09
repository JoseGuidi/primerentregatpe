<?php
Class AuthHelper{
    function AuthHelper(){
        
    }
    function checkLogged(){
        session_start();
        if(!isset($_SESSION['IS_LOGGED'])){
            header("Location:".BASE_URL);
            die();
        }else return true;
    }
}