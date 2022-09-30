<?php
require_once 'app/models/characters.model.php';
require_once 'app/views/characters.view.php';
require_once 'app/models/houses.model.php';
class CharacterController{
    private $model;
    private $view;
    private $houseModel;
    function __construct()
    {
        $this->model = new CharacterModel();
        $this->view = new CharacterView();
        $this->houseModel = new HouseModel();
    }
    function showAll(){
        $characters = $this->model->getAll();
        $this->view->displayAll($characters);
    }
    function showOne($idCharacter){
        $character = $this->model->getCharacterByID($idCharacter);
        if (!empty($character)){
            $house = $this->houseModel->getHouseByID($character->id_casa);
            $this->view->displayOne($character,$house);
        }else{
            //$this->view->displayUnkownCharacter($nameCharacter);
        }
    }
    function getByHouse($house){
        return $this->model->getByHouse($house);
    }
}