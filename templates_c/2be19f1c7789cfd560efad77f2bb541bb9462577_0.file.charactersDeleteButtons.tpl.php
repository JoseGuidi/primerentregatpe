<?php
/* Smarty version 4.2.1, created on 2022-10-05 01:50:12
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\charactersDeleteButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633cc6b4ee02b3_07588374',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2be19f1c7789cfd560efad77f2bb541bb9462577' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\charactersDeleteButtons.tpl',
      1 => 1664734036,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633cc6b4ee02b3_07588374 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> Todos los Personajes</h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characters']->value, 'character');
$_smarty_tpl->tpl_vars['character']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['character']->value) {
$_smarty_tpl->tpl_vars['character']->do_else = false;
?>
        <li>
            <label><?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
</label> 
            <a href="deleteChar/<?php echo $_smarty_tpl->tpl_vars['character']->value->id;?>
" class="btn btn-danger m-2">Borrar</a> 
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
