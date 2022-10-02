<?php
/* Smarty version 4.2.1, created on 2022-10-02 16:01:26
  from 'C:\xampp\htdocs\PrimerEntregaTPE\PrimerEntregaTPE\templates\detailsHouse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633999b675de54_30493021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '581db0ce38f7eb3610a4d03d0f82b7e701053504' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PrimerEntregaTPE\\PrimerEntregaTPE\\templates\\detailsHouse.tpl',
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
function content_633999b675de54_30493021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<h1> Casa: <?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
 </h1>
<p> La casa <?php echo $_smarty_tpl->tpl_vars['house']->value->nombre_casa;?>
 fue fundada por <?php echo $_smarty_tpl->tpl_vars['house']->value->fundador;?>
. Sus colores principales son <?php echo $_smarty_tpl->tpl_vars['house']->value->colores;?>
 y es
    representada por el simbolo de <?php echo $_smarty_tpl->tpl_vars['house']->value->simbolo;?>
</p>
<?php if ($_smarty_tpl->tpl_vars['cond']->value == true) {?>
    <h2> Pertenecen a esta casa los alumnos: </h2>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['characters']->value, 'character');
$_smarty_tpl->tpl_vars['character']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['character']->value) {
$_smarty_tpl->tpl_vars['character']->do_else = false;
?>
            <li>
                <a href="characters/<?php echo $_smarty_tpl->tpl_vars['character']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['character']->value->nombre;?>
</a>
            </li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
<?php } else { ?>
    <h2> Esta casa no tiene alumnos :( </h2>
<?php }?>
   

       

<?php $_smarty_tpl->_subTemplateRender("file:foot.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
