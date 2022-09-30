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

}