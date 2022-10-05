<?php
/* Smarty version 4.2.1, created on 2022-10-05 02:14:58
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\charactersEditButtons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ccc8217e5d9_74232544',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eede8e5042447bd944c9f6673228d1db85f47ca0' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\charactersEditButtons.tpl',
      1 => 1664928799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633ccc8217e5d9_74232544 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="lista">
<h1> Todos los Personajes</h1>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characters']->value, 'character');
$_smarty_tpl->tpl_vars['character']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['character']->value) {
$_smarty_tpl->tpl_vars['character']->do_else = false;
?>
        <li class="list-group-item list-group-item-action">
            <label><?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
</label> 
            <a href="editChar/<?php echo $_smarty_tpl->tpl_vars['character']->value->id;?>
" class="btn btn-secondary m-2">Editar</a> 
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
