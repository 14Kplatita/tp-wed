<?php
/* Smarty version 4.3.1, created on 2023-07-03 21:01:04
  from 'C:\xampp\htdocs\tp wed 2\templates\editar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a31af08791a0_64164735',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2a9be5ac752530540d57bd4ea0d3e253aae8ad29' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\editar.tpl',
      1 => 1688410693,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a31af08791a0_64164735 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="formula">
    <form class="cosa" action="<?php echo ($_smarty_tpl->tpl_vars['BASE_URL']->value).($_smarty_tpl->tpl_vars['action']->value);?>
" method="POST" autocomplete="off">
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">fabricante</label>
            <select class="form-control" name="modelo_fabricante">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fabricante']->value, 'Elfabricante');
$_smarty_tpl->tpl_vars['Elfabricante']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['Elfabricante']->value) {
$_smarty_tpl->tpl_vars['Elfabricante']->do_else = false;
?>
                    <option value=<?php echo $_smarty_tpl->tpl_vars['Elfabricante']->value->categoria_id;?>
><?php echo $_smarty_tpl->tpl_vars['Elfabricante']->value->categoria_fabricante;?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">modelo</label>
            <input class="form-control" name="modelo_modelo" type="text" value="<?php echo $_smarty_tpl->tpl_vars['modelo']->value;?>
">
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">espesificaciones</label>
            <textarea class="form-control" name="modelo_especificaciones"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">imagen</label>
            <textarea class="form-control" name="modelo_imagen"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">historia</label>
            <textarea class="form-control" name="modelo_historia"></textarea>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">juegos</label>
            <textarea class="form-control" name="modelo_juegos"></textarea>
        </div>
        <p class="has-text-centered">
            <button type="submit" class="btn btn-success">Guardar</button>
        </p>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
