<?php
require_once 'app/models/houses.model.php';
require_once 'app/views/houses.view.php';
class HouseController{
    private $model;
    private $view;
    private $charactersModel;
    function __construct()
    {
        $this->model = new HouseModel();
        $this->view = new HouseView();
    }
    function showAll(){
        $houses = $this->model->getAll();
        $this->view->displayAll($houses);
    }
    function showOne($houseName,$characters){
        $house = $this->model->getOneByName($houseName);
        if(!empty($house)){
            $this->view->displayOne($house,$characters);
        }else{
            $this->view->displayUnkownHouse($houseName);
        }
    }
}