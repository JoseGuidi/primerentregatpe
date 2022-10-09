<?php
/* Smarty version 4.2.1, created on 2022-10-09 17:02:31
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\formHouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6342e28735e959_86965365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0c35fcf3e580ea8398afdbf9fdd196e021d2167' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\formHouse.tpl',
      1 => 1665327746,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_6342e28735e959_86965365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">
    
    <label>Nombre de casa: </label>
<input type="text" <?php if ($_smarty_tpl->tpl_vars['house']->value != null) {?> value="<?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
" <?php }?> name="nameHouse">
    
    <label>Fundador: </label>
    <input type="text" <?php if ($_smarty_tpl->tpl_vars['house']->value != null) {?> value="<?php echo $_smarty_tpl->tpl_vars['house']->value->fundador;?>
" <?php }?> name="founder">

    <label>Colores: </label>
    <input type="text" <?php if ($_smarty_tpl->tpl_vars['house']->value != null) {?> value="<?php echo $_smarty_tpl->tpl_vars['house']->value->colores;?>
" <?php }?> name="colors">
    
    <label>Simbolo: </label>
    <input type="text" <?php if ($_smarty_tpl->tpl_vars['house']->value != null) {?> value="<?php echo $_smarty_tpl->tpl_vars['house']->value->simbolo;?>
"  <?php }?> name="symbol">
    <button type="submit">
        <?php if ($_smarty_tpl->tpl_vars['house']->value != null) {?>  Agregar cambios <?php } else { ?> Agregar casa <?php }?>
    </button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
