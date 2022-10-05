<?php
/* Smarty version 4.2.1, created on 2022-10-05 00:53:53
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\formEditHouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cb98120de16_16853476',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35bf952d4121dc03260ad2a8a2204448604c5591' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\formEditHouse.tpl',
      1 => 1664924026,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633cb98120de16_16853476 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editHouse/<?php echo $_smarty_tpl->tpl_vars['house']->value->id;?>
" method="POST">
    
    <label>Nombre de casa: </label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
" name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['house']->value->fundador;?>
" name="founder">

    <label>Colores: </label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['house']->value->colores;?>
" name="colors">
    
    <label>Simbolo: </label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['house']->value->simbolo;?>
" name="symbol">
    <button type="submit">Agregar cambios</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
