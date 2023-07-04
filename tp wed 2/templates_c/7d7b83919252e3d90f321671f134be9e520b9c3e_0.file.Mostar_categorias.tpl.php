<?php
/* Smarty version 4.3.1, created on 2023-07-03 03:00:44
  from 'C:\xampp\htdocs\tp wed 2\templates\Mostar_categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a21dbc72e0b1_90757328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d7b83919252e3d90f321671f134be9e520b9c3e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\Mostar_categorias.tpl',
      1 => 1688346040,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a21dbc72e0b1_90757328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="los-modelos">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Categorias']->value, 'LaCategoria');
$_smarty_tpl->tpl_vars['LaCategoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['LaCategoria']->value) {
$_smarty_tpl->tpl_vars['LaCategoria']->do_else = false;
?>
        <section class="el-modelos">
                    <p>fabricante: <?php echo $_smarty_tpl->tpl_vars['LaCategoria']->value->categoria_fabricante;?>
</p>
                    <img class="imagen" src="<?php echo $_smarty_tpl->tpl_vars['LaCategoria']->value->categoria_logo;?>
">
                    <a class="btn btn-light" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
LosModelos/<?php echo $_smarty_tpl->tpl_vars['LaCategoria']->value->categoria_id;?>
">Ver más</a>
                    <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrar_categoria/<?php echo $_smarty_tpl->tpl_vars['LaCategoria']->value->categoria_id;?>
">borrar</a>
                    <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
editar_categoria/<?php echo $_smarty_tpl->tpl_vars['LaCategoria']->value->categoria_id;?>
">editar</a>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
