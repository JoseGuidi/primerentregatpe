<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
require_once 'app/controllers/login.controller.php';
require_once 'app/controllers/characters.controller.php';
require_once 'app/controllers/houses.controller.php';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else $action = 'home';
$params = explode('/', $action);

$characterController = new CharacterController();
$loginController = new LogInController();
$houseController = new HouseController();
switch ($params[0]) {
    case 'home':
        $loginController->showHome();
        break;
    case 'characters':
        if (empty($params[1]) && (!isset($params[1]))) {
            $characterController->showAll();
        } else {
            $characterController->showOne($params[1]);
        }
        break;
    case 'houses':
        if (empty($params[1]) && (!isset($params[1]))) {
            $houseController->showAll();
        } else {
            $houseController->showOneHouse($params[1]);
        }
        break;
    case 'admin':
        $loginController->registerAdmin();
        break;
    case 'showaddChar':
        $characterController->showFormAddCharacter();
        break;
    case 'addChar':
        $characterController->addCharacter();
        break;
    case 'showaddHouse':
        $houseController->showFormAddHouse();
        break;
    case 'addHouse':
        $houseController->addHouse();
        break;
    case 'listDeleteHouse':
        $houseController->showListDelete();
        break;
    case 'deleteChar' :
        $characterController->deleteCharacter($params[1]);
    default:
        echo 'error 404';
        break;
}