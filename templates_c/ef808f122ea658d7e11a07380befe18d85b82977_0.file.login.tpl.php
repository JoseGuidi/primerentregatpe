<?php
/* Smarty version 4.2.1, created on 2022-10-05 02:14:51
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633ccc7b9018a8_71078728',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef808f122ea658d7e11a07380befe18d85b82977' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\login.tpl',
      1 => 1664928863,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_633ccc7b9018a8_71078728 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<img src="images/login.jpg" alt="Logo WikiPotter">
<div class="login">
  <form method="post" action="admin">
    <!-- Email input -->
    <div class="form-outline">
      <label class="form-label" name="user">Usuario:</label>
      <input type="text" class="form-control" />
    </div>

    <!-- Password input -->
    <div class="form-outline">
      <label class="form-label">Contraseña</label>
      <input type="password" class="form-control" name="password" />
    </div>
    <button class="btnLogIn" type="submit" class="btn btn-outline-primary">Log In</button>
  </form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
