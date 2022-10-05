<?php
/* Smarty version 4.2.1, created on 2022-10-05 01:04:58
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\formEditCharacter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cbc1a691053_19826215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2bb07b5cded3a24e5e9d06508302d39d9f706b6' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\formEditCharacter.tpl',
      1 => 1664924691,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633cbc1a691053_19826215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="editChar/<?php echo $_smarty_tpl->tpl_vars['char']->value->id;?>
" method="POST">

    <label>Nombre: </label>
    <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['char']->value->nombre;?>
" name="name">

    <label>Casa: </label>
    <select  name="idHouse">
            <option value="" selected disabled hidden><?php echo $_smarty_tpl->tpl_vars['houseOfChar']->value->nombre_casa;?>
</option>
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
    <input value="<?php echo $_smarty_tpl->tpl_vars['char']->value->rol;?>
" type="text" name="role">

    <label>Nucleo varita: </label>
    <input value="<?php echo $_smarty_tpl->tpl_vars['char']->value->nucleo_varita;?>
" type="text" name="core">
    <button type="submit">Agregar cambios</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
