<?php
Class AuthHelper{
    function AuthHelper(){
        
    }
    function isLogged(){
        session_start();
        return isset($_SESSION['IS_LOGGED']);
    }
    function logoutUser(){
        session_start();
        session_destroy();
    }
}