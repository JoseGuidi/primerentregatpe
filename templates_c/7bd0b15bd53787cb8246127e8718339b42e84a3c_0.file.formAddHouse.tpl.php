<?php
/* Smarty version 4.2.1, created on 2022-10-02 15:51:17
  from 'C:\xampp\htdocs\PrimerEntregaTPE\PrimerEntregaTPE\templates\formAddHouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633997557e9c36_39776112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bd0b15bd53787cb8246127e8718339b42e84a3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrimerEntregaTPE\\PrimerEntregaTPE\\templates\\formAddHouse.tpl',
      1 => 1664716879,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633997557e9c36_39776112 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="addHouse" method="POST">
    
    <label>Nombre de casa: </label>
    <input type="text" name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" name="founder">

    <label>Colores: </label>
    <input type="text" name="colors">
    
    <label>Simbolo: </label>
    <input type="text" name="symbol">
    <button type="submit">Agregar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
