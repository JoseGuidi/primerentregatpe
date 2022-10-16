<?php
require_once 'app/models/characters.model.php';
require_once 'app/views/characters.view.php';
require_once 'app/models/houses.model.php';
require_once 'app/helpers/AuthHelper.php';
class CharacterController
{
    private $model;
    private $view;
    private $houseModel;
    private $authHelper;
    function __construct()
    {
        $this->model = new CharacterModel();
        $this->view = new CharacterView();
        $this->houseModel = new HouseModel();
        $this->authHelper = new AuthHelper();
        
    }
    function showAll()
    {
        $characters = $this->model->getAll();
        $this->view->displayAll($characters,$this->authHelper->isLogged());
    }
    function showOne($idCharacter)
    {
        $isLogged = $this->authHelper->isLogged();
        $character = $this->model->getCharacterByID($idCharacter);
        if (!empty($character)) {
            $house = $this->houseModel->getHouseByID($character->id_casa);
            $this->view->displayOne($character, $house,$isLogged);
        } else {
            $this->view->displayUnkownCharacter($idCharacter,$isLogged);
        }
    }

    function postIsVoid()
    {
        return ((!isset($_POST['name'])) && (empty($_POST['name'])) ||
            (!isset($_POST['idHouse'])) && (empty($_POST['idHouse'])) ||
            (!isset($_POST['role'])) && (empty($_POST['role'])) ||
            (!isset($_POST['core'])) && (empty($_POST['core'])));
    }
    function addCharacter()
    {
        
        if ($this->authHelper->isLogged()) {
            $houses = $this->houseModel->getAll();
            if ($this->postIsVoid()) {
                $this->view->displayForm('addChar',$houses);
            } else {

                if (empty($this->houseModel->getHouseByID($_POST['idHouse']))) {
                    $this->view->displayForm('addChar',$houses);
                } else {
                    $idHouse = $_POST['idHouse'];
                    $name = $_POST['name'];
                    $core = $_POST['core'];
                    $role = $_POST['role'];
                    $this->model->insertCharacter($name, $idHouse, $role, $core);
                    header("Location: characterList" );
                }
            }
        }else {
            header("Location:" . BASE_URL );
        }
    }

    function showDeleteButtons()
    {
        if ($this->authHelper->isLogged()) {
            $characters = $this->model->getAll();
            $this->view->displayDeleteButtons($characters);
        }else {
            header("Location:" . BASE_URL );
        }
    }

    function deleteCharacter($idCharacter = NULL)
    {
        if ($this->authHelper->isLogged()) {
            $this->model->deleteCharacter($idCharacter);
            header("Location:" . BASE_URL );
        }else {
            header("Location:" . BASE_URL );
        }
    }

    function showEditButtons()
    {
        if ($this->authHelper->isLogged()) {
            $characters = $this->model->getAll();
            $this->view->displayEditButtons($characters);
        }else {
            header("Location:" . BASE_URL );
        }
    }
    function editCharacter($idCharacter)
    {   
        if ($this->authHelper->isLogged()) {
            if ($this->postIsVoid()) {
                $houses = $this->houseModel->getAll();
                $character = $this->model->getCharacterByID($idCharacter);
                $houseOfCharacter = $this->houseModel->getHouseByID($character->id_casa);
                $this->view->displayForm("editChar/$idCharacter",$houses, $character, $houseOfCharacter);
                
            } else {
                echo'hola';
                $idHouse = $_POST['idHouse'];
                $name = $_POST['name'];
                $core = $_POST['core'];
                $role = $_POST['role'];
                $this->model->updateCharacter($name, $idHouse, $role, $core, $idCharacter);
                header("Location: " . BASE_URL );
            }
        }else {
            header("Location:" . BASE_URL );
        }
    }
}
