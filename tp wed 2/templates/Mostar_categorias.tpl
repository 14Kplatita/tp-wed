{include file= 'header.tpl'}
<section class="los-modelos">
    {foreach $Categorias as $LaCategoria}
        <section class="el-modelos">
                    <p>fabricante: {$LaCategoria->categoria_fabricante}</p>
                    <img class="imagen" src="{$LaCategoria->categoria_logo}">
                    <a class="btn btn-light" href="{$BASE_URL}LosModelos/{$LaCategoria->categoria_id}">Ver más</a>
                    <a class="btn btn-danger" href="{$BASE_URL}borrar_categoria/{$LaCategoria->categoria_id}">borrar</a>
                    <a class="btn btn-success" href="{$BASE_URL}editar_categoria/{$LaCategoria->categoria_id}">editar</a>
        </section>
    {/foreach}
</section>
{include file = 'footer.tpl'}