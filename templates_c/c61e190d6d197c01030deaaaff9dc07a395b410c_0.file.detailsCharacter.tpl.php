<?php
/* Smarty version 4.2.1, created on 2022-10-02 16:06:48
  from 'C:\xampp\htdocs\PrimerEntregaTPE\PrimerEntregaTPE\templates\detailsCharacter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63399af84ac574_56700608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c61e190d6d197c01030deaaaff9dc07a395b410c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrimerEntregaTPE\\PrimerEntregaTPE\\templates\\detailsCharacter.tpl',
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
function content_63399af84ac574_56700608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1>Personaje: <?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
</h1>
<p>El personaje <?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
, es un <?php echo $_smarty_tpl->tpl_vars['character']->value->rol;?>
, pertenece a la casa de <a href="houses/<?php echo $_smarty_tpl->tpl_vars['house']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
</a> y su nucleo de varita es <?php echo $_smarty_tpl->tpl_vars['character']->value->nucleo_varita;?>
 </p>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
