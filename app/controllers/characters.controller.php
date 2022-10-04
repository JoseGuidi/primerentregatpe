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
    
    function postIsVoid(){
        return ((!isset($_POST['name']))&& (empty($_POST['name'])) ||
                (!isset($_POST['idHouse']))&& (empty($_POST['idHouse'])) || 
                (!isset($_POST['role']))&& (empty($_POST['role'])) ||
                (!isset($_POST['core']))&& (empty($_POST['core'])));
    }
    function addCharacter(){
        $houses = $this->houseModel->getAll();
        if($this->postIsVoid()){
            $this->view->displayForm($houses,'addChar');
        } else{
        
            if(empty($this->houseModel->getHouseByID($_POST['idHouse']))){
                $this->view->displayForm($houses,'addChar'); 
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

    function showDeleteButtons(){
        $characters = $this->model->getAll();
        $this->view->displayDeleteButtons($characters);
    }

    function deleteCharacter($idCharacter = NULL){
      /*  $characters = $this->model->getAll();
        if(!isset($idCharacter) && empty($idCharacter)){
            $this->view->displayDeleteButtons($characters);
        }else {*/
            $this->model->deleteCharacter($idCharacter);
            header("Location: ". BASE_URL);
       // }
    }

    function showEditButtons(){
        $characters = $this->model->getAll();
        $this->view->displayEditButtons($characters);
    }
    function editCharacter($idCharacter){
        if($this->postIsVoid()){
            $houses = $this->houseModel->getAll();
            $this->view->displayFormEdit($houses,$idCharacter);
        }else {
            $idHouse= $_POST['idHouse'];
            $name = $_POST['name'];
            $core=$_POST['core'];
            $role = $_POST['role'];
            $this->model->updateCharacter($name,$idHouse,$role,$core,$idCharacter);
            header("Location:".BASE_URL);
        }
        
    }
}