<?php
class CharacterModel{
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
        $query = $this->db->prepare("SELECT * FROM personajes");
        $query->execute();
        return ($query->fetchAll(PDO::FETCH_OBJ));
    }
    function getCharacterByID($idCharacter){
        $query=$this->db->prepare("SELECT * FROM personajes WHERE id = ?");
        $query->execute([$idCharacter]);
        return $query->fetch(PDO::FETCH_OBJ);
    }
    function getAllByHouse($id){
        $query = $this->db->prepare ("SELECT * FROM personajes WHERE id_casa = ?");
        $query->execute([$id]);
        return $query->fetchAll((PDO::FETCH_OBJ));
    }
    
}