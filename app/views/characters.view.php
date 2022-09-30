<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class CharacterView{
    private $smarty;

    public function __construct() {
        $this->smarty = new Smarty(); 
    }
    function displayAll($characters){
        $this->smarty->assign('characters',$characters);
        $this->smarty->display('charactersList.tpl');
    }
    function displayOne($character){
        $this->smarty->assign('character',$character);
        $this->smarty->display('detailsCharacter.tpl');
    }
    function displayUnkownCharacter($nameCharacter){
        $this->smarty->assign('name',$nameCharacter);
        $this->smarty->display('UnkownChOrHo.tpl');
    }
}