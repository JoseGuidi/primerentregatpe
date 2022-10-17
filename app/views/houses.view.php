<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class HouseView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
        
    }
    function displayAll($houses,$isLogged)
    {
        $this->smarty->assign('isLogged',$isLogged);
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('housesList.tpl');
    }
    function displayOne($house, $characters,$isLogged)
    {
        $this->smarty->assign('isLogged',$isLogged);
        $this->smarty->assign('house', $house);
        if (!empty($characters)) {
            $this->smarty->assign('houseEmpty', true);
        } else {
            $this->smarty->assign('houseEmpty', false);
        }
        $this->smarty->assign('characters', $characters);
        $this->smarty->display(('detailsHouse.tpl'));
    }

    function displayUnkownHouse($error,$isLogged)
    {
        $this->smarty->assign('isLogged',$isLogged);
        $this->smarty->assign('name', $error);
        $this->smarty->display('UnkownChOrHo.tpl');
    }
    function displayForm($action,$house = null){
        $this->smarty->assign('isLogged',true);
        $this->smarty->assign("action",$action);
        $this->smarty->assign("house",$house);
        $this->smarty->display("formHouse.tpl");
    }
  
    function displayDeleteButtons($houses){
        $this->smarty->assign('isLogged',true);
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('houseDeleteButtons.tpl');
    }
    function displayHouseNotEmpty(){
        $this->smarty->assign('isLogged',true);
        $this->smarty->display('displayHouseNotEmpty.tpl');
    }

    function displayEditButtons($houses){
        $this->smarty->assign('isLogged',true);
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('houseEditButtons.tpl');

    } 
}

