<?php
require_once 'app/models/houses.model.php';
require_once 'app/models/characters.model.php';
require_once 'app/views/houses.view.php';
class HouseController{
    private $model;
    private $view;
    private $charactersModel;
    function __construct()
    {
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
            $characters = $this->charactersModel->getAllByHouse($house->id);
            $this->view->displayOne($house,$characters);
        }else{
            $this->view->displayUnkownHouse($idHouse);
        }
    }
}