<?php
require_once 'app/models/houses.model.php';
require_once 'app/models/characters.model.php';
require_once 'app/views/houses.view.php';

class HouseController{
    private $model;
    private $view;
    private $charactersModel;

    function __construct(){
        $this->model = new HouseModel();
        $this->view = new HouseView();
        $this->charactersModel = new CharacterModel();
    }
    function showAll(){
        $houses = $this->model->getAll();
        $this->view->displayAll($houses);
    }
    function showOneHouse($idHouse){
        $house = $this->model->getHouseByID($idHouse); // recibo house por id
        if(!empty($house)){
            $characters = $this->charactersModel->getAllByHouse($idHouse);
            $this->view->displayOne($house,$characters);
        }else{
            $this->view->displayUnkownHouse($idHouse);
        }
    }
    function postIsVoid(){
        return ((!isset($_POST['nameHouse']))&& (empty($_POST['nameHouse'])) ||
                (!isset($_POST['founder']))&& (empty($_POST['founder'])) || 
                (!isset($_POST['colors']))&& (empty($_POST['colors'])) ||
                (!isset($_POST['symbol']))&& (empty($_POST['symbol'])));
    }
    function addHouse(){

        if($this->postIsVoid()){
            $this->view->displayFormAddHouse();
        }else {
            $name=$_POST['nameHouse'];
            $founder=$_POST['founder'];
            $colors = $_POST['colors'];
            $symbol=$_POST['symbol'];
            $this->model->insertHouse($name,$founder,$colors,$symbol);
            header("Location: ". BASE_URL);

        }
    }
    function showDeleteButtons(){
        $houses = $this->model->getAll();
        $this->view->displayDeleteButtons($houses);
    }
    function deleteHouse($idHouse){
        if (!empty($this->charactersModel->getAllByHouse($idHouse))){
            $this->view->displayHouseNotEmpty();
        }else{
            $this->model->deleteHouse($idHouse);
            header("Location: " . BASE_URL);
        }
    }

    function showEditButtons(){
        $houses = $this->model->getAll();
        $this->view->displayEditButtons($houses);
    }
    function editHouse($idHouse){
        if ($this->postIsVoid()){
            $house = $this->model->getHouseByID($idHouse);
            $this->view->displayFormEdit($house);
        }else if (!empty($this->charactersModel->getAllByHouse($idHouse))){
            $this->view->displayHouseNotEmpty();
        }else {
            $name=$_POST['nameHouse'];
            $founder=$_POST['founder'];
            $colors = $_POST['colors'];
            $symbol=$_POST['symbol'];
            $this->model->updateHouse($name,$founder,$colors,$symbol,$idHouse);
            header("Location: ". BASE_URL);
        }
    }
}