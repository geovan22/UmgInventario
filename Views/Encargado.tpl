{include file='Operario/BarraCentral.tpl'}
{include file='Encargado/BarraLateral.tpl'}
 
    <div class="col-10">
      {if $vista=='Inventario'}
        {include file='Encargado/Inventario.tpl'}
      {else if $vista=='Movimiento'}
        {include file='Encargado/Movimientos.tpl'}
      {else if $vista=='CrearUsuario'}
        {include file='Encargado/CrearUsuario.tpl'}
      {else if $vista=='ListarUsuario'}
        {include file='Encargado/ListarUsuario.tpl'}
      {else if $vista=='CrearCategoria'}
        {include file='Encargado/CrearCategoria.tpl'}
      {else if $vista=='VerCategoria'}
        {include file='Encargado/VerCategoria.tpl'}
      
      {else}
        <br /><br />  
        <img src="Recursos/LogoUmg.png" class="rounded mx-auto d-block" alt="Responsive image"/>
      {/if}
    </div>
 </div>