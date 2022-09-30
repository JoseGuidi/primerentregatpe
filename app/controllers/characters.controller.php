<?php
require_once 'app/models/characters.model.php';
require_once 'app/views/characters.view.php';
class CharacterController{
    private $model;
    private $view;
    function __construct()
    {
        $this->model = new CharacterModel();
        $this->view = new CharacterView();
    }
    function showAll(){
        $characters = $this->model->getAll();
        $this->view->displayAll($characters);
    }
    function showOne($nameCharacter){
        $character = $this->model->getOne($nameCharacter);
        if (!empty($character)){
            $this->view->displayOne($character);
        }else{
            $this->view->displayUnkownCharacter($nameCharacter);
        }
    }
    function getByHouse($house){
        return $this->model->getByHouse($house);
    }
}