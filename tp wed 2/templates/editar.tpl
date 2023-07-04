{include file = 'header.tpl'}
<div class="formula">
    <form class="cosa" action="{$BASE_URL|cat:$action}" method="POST" autocomplete="off">
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">fabricante</label>
            <select class="form-control" name="modelo_fabricante">
                {foreach from=$fabricante item=Elfabricante}
                    <option value={$Elfabricante->categoria_id}>{$Elfabricante->categoria_fabricante}</option>
                {/foreach}
            </select>
        </div>
        <div class="amigo">
            <label for="exampleFormControlTextarea1" class="form-label">modelo</label>
            <input class="form-control" name="modelo_modelo" type="text" value="{$modelo}">
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
{include file = 'footer.tpl'}