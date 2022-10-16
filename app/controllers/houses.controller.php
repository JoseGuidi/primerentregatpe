<?php
require_once 'app/models/houses.model.php';
require_once 'app/models/characters.model.php';
require_once 'app/views/houses.view.php';
require_once 'app/helpers/AuthHelper.php';

class HouseController
{
    private $model;
    private $view;
    private $charactersModel;
    private $authHelper;
    function __construct()
    {
        $this->model = new HouseModel();
        $this->view = new HouseView();
        $this->charactersModel = new CharacterModel();
        $this->authHelper = new AuthHelper();
    }
    function showAll()
    {
        $houses = $this->model->getAll();
        $this->view->displayAll($houses, $this->authHelper->isLogged());
    }
    function showOneHouse($idHouse)
    {
        $isLogged = $this->authHelper->isLogged();
        $house = $this->model->getHouseByID($idHouse); // recibo house por id
        if (!empty($house)) {
            $characters = $this->charactersModel->getAllByHouse($idHouse);
            $this->view->displayOne($house, $characters, $isLogged);
        } else {
            $this->view->displayUnkownHouse($idHouse, $isLogged);
        }
    }
    function postIsVoid()
    {
        return ((!isset($_POST['nameHouse'])) && (empty($_POST['nameHouse'])) ||
            (!isset($_POST['founder'])) && (empty($_POST['founder'])) ||
            (!isset($_POST['colors'])) && (empty($_POST['colors'])) ||
            (!isset($_POST['symbol'])) && (empty($_POST['symbol'])));
    }
    function verifyImage()
    {
        return $_FILES['shield']['type'] == "image/jpg" || $_FILES['shield']['type'] == "image/jpeg" || $_FILES['shield']['type'] == "image/png";
    }
    function addHouse()
    {
        if ($this->authHelper->isLogged()) {
            if ($this->postIsVoid()) {
                $this->view->displayForm("addHouse");
            } else {
                $name = $_POST['nameHouse'];
                $founder = $_POST['founder'];
                $colors = $_POST['colors'];
                $symbol = $_POST['symbol'];

                if ($this->verifyImage()) {
                    $this->model->insertHouse($name, $founder, $colors, $symbol, $_FILES['shield']['tmp_name']);
                } else {
                    $this->model->insertHouse($name, $founder, $colors, $symbol);
                }
                header("Location: houseList");
            }
        } else {
            header("Location:" . BASE_URL);
        }
    }
    function showDeleteButtons()
    {
        if ($this->authHelper->isLogged()) {
            $houses = $this->model->getAll();
            $this->view->displayDeleteButtons($houses);
        } else {
            header("Location:" . BASE_URL);
        }
    }
    function deleteHouse($idHouse)
    {
        if ($this->authHelper->isLogged()) {
            if (!empty($this->charactersModel->getAllByHouse($idHouse))) {
                $this->view->displayHouseNotEmpty();
            } else {
                $this->model->deleteHouse($idHouse);
                header("Location: " . BASE_URL);
            }
        } else {
            header("Location: " . BASE_URL);
        }
    }

    function showEditButtons()
    {
        if ($this->authHelper->isLogged()) {
            $houses = $this->model->getAll();
            $this->view->displayEditButtons($houses);
        } else {
            header("Location: " . BASE_URL);
        }
    }
    function editHouse($idHouse)
    {
        if ($this->authHelper->isLogged()) {
            if ($this->postIsVoid()) {
                $house = $this->model->getHouseByID($idHouse);
                $this->view->displayForm("editHouse/$idHouse", $house);
            } else if (!empty($this->charactersModel->getAllByHouse($idHouse))) {
                $this->view->displayHouseNotEmpty();
            } else {
                $name = $_POST['nameHouse'];
                $founder = $_POST['founder'];
                $colors = $_POST['colors'];
                $symbol = $_POST['symbol'];
                if ($this->verifyImage()) {
                    $this->model->updateHouse($name, $founder, $colors, $symbol, $idHouse, $_FILES['shield']['tmp_name']);
                } else {
                    $this->model->updateHouse($name, $founder, $colors, $symbol, $idHouse);
                }
                header("Location: " . BASE_URL);
            }
        } else {
            header("Location: " . BASE_URL);
        }
    }
}
