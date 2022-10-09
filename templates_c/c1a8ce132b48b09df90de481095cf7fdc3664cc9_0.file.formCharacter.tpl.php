<?php
/* Smarty version 4.2.1, created on 2022-10-09 05:28:51
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\formCharacter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63423ff3dbac86_87125996',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1a8ce132b48b09df90de481095cf7fdc3664cc9' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\formCharacter.tpl',
      1 => 1665286125,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_63423ff3dbac86_87125996 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">

    <label>Nombre: </label>
    <input type="text" <?php if (!empty($_smarty_tpl->tpl_vars['char']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['char']->value->nombre;?>
" <?php }?> name="name">


    <label>Casa: </label>
    <select name="idHouse">
        <?php if (!empty($_smarty_tpl->tpl_vars['char']->value)) {?>
            <option selected hidden><?php echo $_smarty_tpl->tpl_vars['houseOfChar']->value->nombre_casa;?>
</option> 
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['houses']->value, 'house');
$_smarty_tpl->tpl_vars['house']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['house']->value) {
$_smarty_tpl->tpl_vars['house']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['house']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>

    <label>Rol: </label>
    <input <?php if (!empty($_smarty_tpl->tpl_vars['char']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['char']->value->rol;?>
" <?php }?> type="text" name="role">

    <label>Nucleo varita: </label>
    <input <?php if (!empty($_smarty_tpl->tpl_vars['char']->value)) {?>value="<?php echo $_smarty_tpl->tpl_vars['char']->value->nucleo_varita;?>
" <?php }?> type="text" name="core">
    <button type="submit">Agregar cambios</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
