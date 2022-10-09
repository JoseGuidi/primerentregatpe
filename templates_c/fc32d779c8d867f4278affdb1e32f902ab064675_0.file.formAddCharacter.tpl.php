<?php
/* Smarty version 4.2.1, created on 2022-10-09 03:59:28
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\formAddCharacter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63422b008a3982_15329880',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fc32d779c8d867f4278affdb1e32f902ab064675' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\formAddCharacter.tpl',
      1 => 1665280764,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_63422b008a3982_15329880 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="form-group" action="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" method="POST">

    <label>Nombre: </label>
    <input type="text" name="name">

    <label>Casa: </label>
    <select name="idHouse">
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
    <input type="text" name="role">

    <label>Nucleo varita: </label>
    <input type="text" name="core">
    <button type="submit">Agregar</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
