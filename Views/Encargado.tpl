{include file='Operario/BarraCentral.tpl'}
{include file='Encargado/BarraLateral.tpl'}
 
    <div class="col-10">
      {if $vista=='Inventario'}
        {include file='Encargado/Inventario.tpl'}
      {else if $vista=='Movimiento'}
        {include file='Encargado/Movimientos.tpl'}
      
      {else}
        <br /><br />  
        <img src="Recursos/LogoUmg.png" class="rounded mx-auto d-block" alt="Responsive image">
      {/if}
    </div>
 </div>