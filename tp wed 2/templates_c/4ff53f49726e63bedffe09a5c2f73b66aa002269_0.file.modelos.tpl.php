<?php
/* Smarty version 4.3.1, created on 2023-07-03 00:29:21
  from 'C:\xampp\htdocs\tp wed 2\templates\modelos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a1fa41ca34a8_05508587',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4ff53f49726e63bedffe09a5c2f73b66aa002269' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\modelos.tpl',
      1 => 1688335645,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a1fa41ca34a8_05508587 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<section class="los-modelos">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modelos']->value, 'modelo');
$_smarty_tpl->tpl_vars['modelo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['modelo']->value) {
$_smarty_tpl->tpl_vars['modelo']->do_else = false;
?>
        <section class="el-modelos">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabricante']->value, 'Elfabricante');
$_smarty_tpl->tpl_vars['Elfabricante']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Elfabricante']->value) {
$_smarty_tpl->tpl_vars['Elfabricante']->do_else = false;
?>
                <?php if ($_smarty_tpl->tpl_vars['Elfabricante']->value->categoria_id == $_smarty_tpl->tpl_vars['modelo']->value->categoria_id) {?>
                <p>fabricante: <?php echo $_smarty_tpl->tpl_vars['Elfabricante']->value->categoria_fabricante;?>
</p>
                <?php }?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <p>modelos: <?php echo $_smarty_tpl->tpl_vars['modelo']->value->modelos_modelo;?>
</p>
            <div class="ratio ratio-4x3">
                <img class="lasimagenes" src="<?php echo $_smarty_tpl->tpl_vars['modelo']->value->modelos_imagen;?>
">
            </div>
            <a class="btn btn-light" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
modelo/<?php echo $_smarty_tpl->tpl_vars['modelo']->value->modelos_id;?>
">Ver más</a>
            <a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
borrar/<?php echo $_smarty_tpl->tpl_vars['modelo']->value->modelos_id;?>
">borrar</a>
            <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
editar/<?php echo $_smarty_tpl->tpl_vars['modelo']->value->modelos_id;?>
">editar</a>
        </section>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</section>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
