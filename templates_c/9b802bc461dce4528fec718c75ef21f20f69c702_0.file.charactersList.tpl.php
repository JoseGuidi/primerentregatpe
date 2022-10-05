<?php
/* Smarty version 4.2.1, created on 2022-10-05 02:16:52
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\charactersList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cccf4c63ee3_09090787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b802bc461dce4528fec718c75ef21f20f69c702' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\charactersList.tpl',
      1 => 1664928990,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633cccf4c63ee3_09090787 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="lista">
    <h1> Todos los Personajes</h1>
    <img src="images/personajes.jpg" alt="Personajes de harry potter">
    <ul class="list-group">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characters']->value, 'character');
$_smarty_tpl->tpl_vars['character']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['character']->value) {
$_smarty_tpl->tpl_vars['character']->do_else = false;
?>
            <li class="list-group-item list-group-item-action">
                <a  class="anchorLista" href="characters/<?php echo $_smarty_tpl->tpl_vars['character']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    <img src="images/personajes2.jpg" alt="Personajes de harry potter">
</div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
