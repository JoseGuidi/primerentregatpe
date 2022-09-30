<?php
class CharacterModel{
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
        $query = $this->db->prepare("SELECT * FROM personajes");
        $query->execute();
        return ($query->fetchAll(PDO::FETCH_OBJ));
    }
    function getOne($nameCharacter){
        $query=$this->db->prepare("SELECT * FROM personajes WHERE nombre = ?");
        $query->execute([$nameCharacter]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function getByHouse($house){
        $query = $this->db->prepare ("SELECT * FROM personajes WHERE casa = ?");
        $query->execute([$house]);
        return $query->fetchAll((PDO::FETCH_OBJ));
    }
}