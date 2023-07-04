{include file = 'header.tpl'}
<div class="form">    
    <form class="row g-3" method="post" action="{$BASE_URL}inicio_seccion">
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
        <a class="btn btn-primary" href="{$BASE_URL}inicio_seccion">Sign in</a>
        <a class="btn btn-success" href="{$BASE_URL}formulario">Crear cuenta nueva</a>
        </div>
    </form>
</div>
{include file = 'footer.tpl'}