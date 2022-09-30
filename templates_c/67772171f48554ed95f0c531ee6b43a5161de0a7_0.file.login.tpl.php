<?php
/* Smarty version 4.2.1, created on 2022-09-30 21:23:17
  from 'C:\xampp\htdocs\PrimerEntregaTPE\PrimerEntregaTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63374225c66c97_08944790',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67772171f48554ed95f0c531ee6b43a5161de0a7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrimerEntregaTPE\\PrimerEntregaTPE\\templates\\login.tpl',
      1 => 1664542924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_63374225c66c97_08944790 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form method="post" action="admin" >
  <!-- Email input -->
  <div class="form-outline m-4">
    <input type="text"class="form-control" />
    <label class="form-label" name="user">Usuario:</label>
  </div>

  <!-- Password input -->
  <div class="form-outline m-4">
    <input type="password"  class="form-control" name="password"/>
    <label class="form-label" >Contraseña</label>
  </div>
  <button type="submit">Log In</button>
</form>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
