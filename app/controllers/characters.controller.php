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
    function addCharacter(){
        $houses = $this->houseModel->getAll();
        if(empty($_POST)){
            $this->view->displayFormAdd($houses);
        } else{
        
            if(empty($this->houseModel->getHouseByID($_POST['idHouse']))){
                $this->view->displayFormAdd($houses); 
            }else{
                $idHouse= $_POST['idHouse'];
                $name = $_POST['name'];
                $core=$_POST['core'];
                $role = $_POST['role'];
                $this->model->insertCharacter($name,$idHouse,$role,$core);
                header("Location:".BASE_URL);
            }
        }

    }

    
    function showListDelEdit(){
        $characters = $this->model->getAll();
        $this->view->displayWithButtons($characters);
    }
    function deleteCharacter($idCharacter){
        $this->model->deleteCharacter($idCharacter);
        header(("Location: ".BASE_URL));
    }
}