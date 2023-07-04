<?php
/* Smarty version 4.3.1, created on 2023-07-04 20:16:33
  from 'C:\xampp\htdocs\tp wed 2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64a4620196f640_15554605',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8faaf3bcddbee8f4ec5cd81a214d43f100fec2dd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\login.tpl',
      1 => 1688494590,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64a4620196f640_15554605 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="form">    
    <form class="row g-3" method="post" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
inicio_seccion">
        <h4>Inicio de Seccion</h4>
        <div class="form-floating mb-3">
            <input name="usuario_nombre" id='usuario_nombre' type="text" class="form-control" placeholder="usuario">
            <label for="floatingInput">usuario</label>
        </div>
        <div class="form-floating">
            <input name="usuario_contraseña1" id='usuario_contraseña1' type="password" class="form-control" placeholder="contraseña">
            <label for="floatingPassword">contraseña</label>
        </div>
        <div class="col-12">
        <a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
inicio_seccion">Sign in</a>
        <a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
formulario">Crear cuenta nueva</a>
        </div>
    </form>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
