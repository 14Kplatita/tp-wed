{include file = 'header.tpl'}
<form class="formulario" action="{$BASE_URL}enviar" method="POST" autocomplete="off">
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
{include file = 'footer.tpl'}