<?php
/* Smarty version 4.2.1, created on 2022-10-09 04:46:00
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\housesList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634235e8b40d22_73106919',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '561e640ebdffe0a7e0d30f71d26589cf2b84f9d7' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\housesList.tpl',
      1 => 1665280690,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_634235e8b40d22_73106919 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="lista">
<h1>Todas las casas: </h1>
<ul class="list-group">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['houses']->value, 'house');
$_smarty_tpl->tpl_vars['house']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['house']->value) {
$_smarty_tpl->tpl_vars['house']->do_else = false;
?>
        <li class="list-group-item list-group-item-action">
            <a class="anchorLista" href="houses/<?php echo $_smarty_tpl->tpl_vars['house']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
</a>
        </li>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

</ul>
</div>
<img src="images/casas.jpg" alt="Casas HP">
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
