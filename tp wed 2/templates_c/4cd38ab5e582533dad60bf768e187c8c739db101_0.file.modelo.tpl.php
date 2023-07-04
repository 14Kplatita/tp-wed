<?php
/* Smarty version 4.3.1, created on 2023-07-02 07:40:58
  from 'C:\xampp\htdocs\tp wed 2\templates\modelo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a10deaea1970_80761360',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4cd38ab5e582533dad60bf768e187c8c739db101' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\modelo.tpl',
      1 => 1688276455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a10deaea1970_80761360 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="elmodelo">
    <ul>
        <p>fabricante: <?php echo $_smarty_tpl->tpl_vars['fabricante']->value->categoria_fabricante;?>
</p>
        <p>modelos: <?php echo $_smarty_tpl->tpl_vars['elmodelo']->value->modelos_modelo;?>
</p>
        <p>espesificaciones: <?php echo $_smarty_tpl->tpl_vars['elmodelo']->value->modelos_especificaciones;?>
</p>
        <img class="imagen" src="<?php echo $_smarty_tpl->tpl_vars['elmodelo']->value->modelos_imagen;?>
">
        <p>historia: <?php echo $_smarty_tpl->tpl_vars['elmodelo']->value->modelos_historia;?>
</p>
        <p>juegos: <?php echo $_smarty_tpl->tpl_vars['elmodelo']->value->modelos_juegos;?>
</p>
    </ul>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
