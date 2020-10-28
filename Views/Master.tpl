{include file="Cabeceras/Header.tpl"}
    {$view=$title|cat:'.tpl'}
    
    {if file_exists("Views/"|cat:$view)}
        {include file=$view}
    {else}
        <h1>vista no disponible</h1>
    {/if}
{include file="Cabeceras/Footer.tpl"}