<?php
class HouseModel{
    private $db;
    function __construct()
    {
        $this->db = new PDO(
            'mysql:host=localhost;'
                . 'dbname=trabajoespecial;charset=utf8',
            'root',
            ''
        );
    }
    function getAll(){
        $query = $this->db->prepare("SELECT * FROM casas");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_OBJ);
    }
    function getOneByName($nameHouse){
        $query = $this->db->prepare("SELECT * FROM casas WHERE nombre_casa = ?");
        $query->execute([$nameHouse]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
}