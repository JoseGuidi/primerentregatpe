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
        if(empty($params[1]) && (!isset($params[1]))){
            $characterController->showAll();
        }else{
            $characterController->showOne($params[1]);
        }
        break;
    case 'houses':
        if(empty($params[1]) && (!isset($params[1]))){
            $houseController->showAll();
        }else{ 
            $characters = $characterController->getByHouse($params[1]);
            $houseController->showOne($params[1],$characters); //muestra info de casa + personajes q comparten
        }
        break;
    case 'admin':
        $loginController->registerAdmin();
        break;
    case 'add':
        echo 'add';
        break;
    case 'edit':
        echo 'edit';
        break;
    case 'delete':
        echo 'delete';
        break;
    default:
        echo 'error 404';
        break;
}
