<?php
/* Smarty version 4.2.1, created on 2022-10-02 15:31:37
  from 'C:\xampp\htdocs\PrimerEntregaTPE\PrimerEntregaTPE\templates\formAddCharacter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633992b933a258_60138760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7cf6aa9cadba05e37dd3c48ddd25b5e7cc6f5c60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrimerEntregaTPE\\PrimerEntregaTPE\\templates\\formAddCharacter.tpl',
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
function content_633992b933a258_60138760 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="addChar" method="POST">

    <label>Nombre: </label>
    <input type="text" name="name">

    <label>Casa: </label>
    <select name="idHouse">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allHouses']->value, 'house');
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
    <input type="text" name="role">

    <label>Nucleo varita: </label>
    <input type="text" name="core">
    <button type="submit">Agregar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
