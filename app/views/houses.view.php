<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class HouseView
{
    private $smarty;
    function __construct()
    {
        $this->smarty = new Smarty();
    }
    function displayAll($houses)
    {
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('housesList.tpl');
    }
    function displayOne($house, $characters)
    {
        $this->smarty->assign('house', $house);
        if (!empty($characters)) {
            $this->smarty->assign('cond', true);
        } else {
            $this->smarty->assign('cond', false);
        }
        $this->smarty->assign('characters', $characters);
        $this->smarty->display(('detailsHouse.tpl'));
    }

    function displayUnkownHouse($error)
    {
        $this->smarty->assign('name', $error);
        $this->smarty->display('UnkownChOrHo.tpl');
    }
    function displayFormAddHouse(){
        $this->smarty->display('formAddHouse.tpl');
    }
    function displayDeleteButtons($houses){
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('houseDeleteButtons.tpl');
    }
    function displayHouseNotEmpty(){
        $this->smarty->display('displayHouseNotEmpty.tpl');
    }
    function displayFormEdit($idHouse) {
        $this->smarty->assign("id",$idHouse);
        $this->smarty->display('formEditHouse.tpl');
    }
    function displayEditButtons($houses){
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('houseEditButtons.tpl');

    } 
}

