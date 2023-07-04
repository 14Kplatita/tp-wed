{include file = 'header.tpl'}
<div class="elmodelo">
    <ul>
        <p>fabricante: {$fabricante->categoria_fabricante}</p>
        <p>modelos: {$elmodelo->modelos_modelo}</p>
        <p>espesificaciones: {$elmodelo->modelos_especificaciones}</p>
        <img class="imagen" src="{$elmodelo->modelos_imagen}">
        <p>historia: {$elmodelo->modelos_historia}</p>
        <p>juegos: {$elmodelo->modelos_juegos}</p>
    </ul>
</div>
{include file = 'footer.tpl'}