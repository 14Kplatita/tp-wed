<?php
/* Smarty version 4.3.1, created on 2023-06-21 03:09:13
  from 'C:\xampp\htdocs\tp wed 2\templates\formulario.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64924db999b227_72322862',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b88c35a8babaab3ca402baf662a03b1afd9b5fa7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\tp wed 2\\templates\\formulario.tpl',
      1 => 1687309676,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_64924db999b227_72322862 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="formulario" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
enviar" method="POST" autocomplete="off">
	<div class="row g-3">
		<div class="col">
			<label>Nombres</label>
			<input class="form-control" type="text" name="usuario_nombre" maxlength="40" placeholder="Nombre">
		</div>
		<div class="col">
			<label>Apellidos</label>
			<input class="form-control" type="text" name="usuario_apellido" maxlength="40" placeholder="Apellido">
		</div>
		<div class="col-12">
			<label>Usuario</label>
			<input class="form-control" type="text" name="usuario_usuario" maxlength="20" placeholder="Usuario"
		</div>
		<div class="col-12">
			<label>Email</label>
			<input class="form-control" type="email" name="usuario_email" maxlength="70" placeholder="Email">
		</div>
		<div class="col-12">
			<label>Clave</label>
			<input class="form-control" type="password" name="usuario_contraseña1" maxlength="100" placeholder="Contraseña">
		</div>
		<div class="col-12">
			<button type="submit" class="btn btn-success">Guardar</button>
		</div>
	</div>
</form>
<?php $_smarty_tpl->_subTemplateRender('file:footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
