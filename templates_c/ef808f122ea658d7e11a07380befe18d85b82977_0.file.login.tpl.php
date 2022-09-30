<?php
/* Smarty version 4.2.1, created on 2022-09-30 15:02:16
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6336e8d855de48_28290474',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef808f122ea658d7e11a07380befe18d85b82977' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\login.tpl',
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
function content_6336e8d855de48_28290474 (Smarty_Internal_Template $_smarty_tpl) {
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
