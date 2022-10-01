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
            $this->view->displayUnkownCharacter($idCharacter);
        }
    }
    function showFormAddCharacter(){
        $houses = $this->houseModel->getAll();
        $this->view->displayFormAddCharacter($houses);
    }
    function addCharacter(){
        $idHouse= $_POST['idHouse'];
         // comprobar si viene vacio
        if(!empty($this->houseModel->getHouseByID($idHouse))){
            $name = $_POST['name'];
            $core=$_POST['core'];
            $role = $_POST['role'];
            $this->model->addCharacter($name,$idHouse,$core,$role);
            header("Location: ". BASE_URL);
        }else{
            $this->view->displayUnkownCharacter("Casa con id $idHouse");
        }
    }
    function showListDelete(){
        $characters = $this->model->getAll();
        $this->view->displayWithDelete($characters);
    }
    function deleteCharacter($idCharacter){
        $this->model->deleteCharacter($idCharacter);
        header(("Location: ".BASE_URL));
    }
}