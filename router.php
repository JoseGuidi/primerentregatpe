<?php
define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');
require_once 'app/controllers/auth.controller.php';
require_once 'app/controllers/characters.controller.php';
require_once 'app/controllers/houses.controller.php';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else $action = 'home';
$params = explode('/', $action);

$characterController = new CharacterController();
$authController = new authController();
$houseController = new HouseController();
switch ($params[0]) {
    case 'home':
        $authController->showLogin();
        break;
    case 'validate':
        $authController->validatePassword();
        break;
    case 'logout':
        $authController->logoutUser();
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

    case 'addChar':
        $characterController->addCharacter();
        break;
    case 'addHouse':
        $houseController->addHouse();
        break;

    case 'deleteChar':
        if (empty($params[1]) && (!isset($params[1]))) {
            $characterController->showDeleteButtons();
        }else $characterController->deleteCharacter($params[1]);
        break;
    case 'deleteHouse':
        if (empty($params[1]) && (!isset($params[1]))) {
            $houseController->showDeleteButtons();
        }else $houseController->deleteHouse($params[1]);
        break;

    case 'editChar':        
        if (empty($params[1]) && (!isset($params[1]))) {
            $characterController->showEditButtons();
        }else $characterController->editCharacter($params[1]);
        break;       

   case 'editHouse':
        if (empty($params[1]) && (!isset($params[1]))) {
            $houseController->showEditButtons();
        } else $houseController->editHouse($params[1]);
        break;
    default:
        echo 'error 404';
        break;
}
