<?php
class HouseModel{
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
    function getAll(){
        $query = $this->db->prepare("SELECT * FROM casas");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getHouseByID($idHouse){
        $query = $this->db->prepare("SELECT * FROM casas WHERE id = ?");
        $query->execute([$idHouse]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    
    function addHouse($name,$founder,$colors,$symbol){
        $query = $this->db->prepare("INSERT INTO casas (nombre_casa,colores,simbolo,fundador) VALUES (?,?,?,?)");
        $query->execute([$name,$colors,$symbol,$founder]);
    }
    function deleteHouse($idHouse){
        $query = $this->db->prepare("DELETE FROM casas WHERE id = ?");
        $query->execute([$idHouse]);
    }

}