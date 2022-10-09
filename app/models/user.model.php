<?php
class UserModel{
    private $db;
    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
                . 'dbname=primerentrega;charset=utf8',
            'root',
            ''
        );
    }
    function getUserByName($name){
        $query = $this->db->prepare("SELECT * FROM usuarios WHERE nombre_usuario = ?");
        $query->execute([$name]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}