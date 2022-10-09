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
    function displayOne($character,$house){
        $this->smarty->assign('character',$character);
        $this->smarty->assign('house',$house);
        $this->smarty->display('detailsCharacter.tpl');
    }
    function displayUnkownCharacter($nameCharacter){
        $this->smarty->assign('name',$nameCharacter);
        $this->smarty->display('UnkownChOrHo.tpl');
    }
    function displayForm($houses,$action){
        $this->smarty->assign('action',$action);
        $this->smarty->assign('houses',$houses);
        $this->smarty->display('formAddCharacter.tpl');
    }
    
    function displayButtons($button,$action,$characters){
        $this->smarty->assign('button',$button);
        $this->smarty->assign('action',$action);
        $this->smarty->assign('characters',$characters);
        $this->smarty->display('displayCharWithButtons.tpl');
    }
    function displayDeleteButtons($characters){                 // probar combinando con edit pasando porparametro la accion
        $this->smarty->assign('characters',$characters);
        $this->smarty->display('charactersDeleteButtons.tpl');
    }
    function displayEditButtons($characters){
        $this->smarty->assign('characters',$characters);
        $this->smarty->display('charactersEditButtons.tpl');
    }
    function displayFormEdit($houses,$char,$houseOfChar){
        
        $this->smarty->assign('houseOfChar',$houseOfChar);
        $this->smarty->assign('char',$char);
        $this->smarty->assign('houses',$houses);
        $this->smarty->display('formEditCharacter.tpl');
    }
}