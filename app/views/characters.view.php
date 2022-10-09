<?php
require_once('./libs/smarty/libs/Smarty.class.php');
class CharacterView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
        
    }
    function displayAll($characters)
    {   
        $this->smarty->assign('characters', $characters);
        $this->smarty->display('charactersList.tpl');
    }
    function displayOne($character, $house)
    {
        $this->smarty->assign('character', $character);
        $this->smarty->assign('house', $house);
        $this->smarty->display('detailsCharacter.tpl');
    }
    function displayUnkownCharacter($nameCharacter)
    {
        $this->smarty->assign('name', $nameCharacter);
        $this->smarty->display('UnkownChOrHo.tpl');
    }

    function displayForm($action, $houses, $char = null, $houseOfChar = null)
    {
        $this->smarty->assign('action', $action);
        if ($char != null && $houseOfChar != null) {
            $this->smarty->assign('houseOfChar', $houseOfChar);
            $this->smarty->assign('char', $char);
        }
        $this->smarty->assign('houses', $houses);
        $this->smarty->display('formCharacter.tpl');
    }

    function displayDeleteButtons($characters)
    {
        $this->smarty->assign('characters', $characters);
        $this->smarty->display('charactersDeleteButtons.tpl');
    }
    function displayEditButtons($characters)
    {
        $this->smarty->assign('characters', $characters);
        $this->smarty->display('charactersEditButtons.tpl');
    }
}
