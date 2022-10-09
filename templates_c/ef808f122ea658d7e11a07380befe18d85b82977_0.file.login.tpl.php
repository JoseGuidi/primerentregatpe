<?php
/* Smarty version 4.2.1, created on 2022-10-09 00:02:48
  from 'C:\xampp\newInstall\htdocs\practicos\PrimerEntregaTPE\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6341f38888ebc9_87242585',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef808f122ea658d7e11a07380befe18d85b82977' => 
    array (
      0 => 'C:\\xampp\\newInstall\\htdocs\\practicos\\PrimerEntregaTPE\\templates\\login.tpl',
      1 => 1665266567,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:head.tpl' => 1,
    'file:foot.tpl' => 1,
  ),
),false)) {
function content_6341f38888ebc9_87242585 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<img src="images/login.jpg" alt="Logo WikiPotter">

  <div class="login">
    <form method="post" action="validate">

      <div class="form-outline">
        <label class="form-label">Usuario:</label>
        <input type="text" name="username" class="form-control" />
      </div>


      <div class="form-outline">
        <label class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" />
      </div>
      <button class="btnLogIn" type="submit" class="btn btn-outline-primary">Log In</button>
    </form>
    <?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
      <div class="alert alert-danger" role="alert">
        Usuario o contraseña incorrecta, intente de nuevo.
      </div>
    <?php }?>
  </div>

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
