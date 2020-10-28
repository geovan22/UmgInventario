{include file='Operario/BarraCentral.tpl'}
{include file='Operario/BarraLateral.tpl'}
 
    <div class="col-10">
      {if $vista=='Inventario'}
        {include file='Operario/Inventario.tpl'}
      {else if $vista=='EntradaSalida'}
        {include file='Operario/EntradaSalida.tpl'}
      {else if $vista=='InputOutput'}
        {include file='Operario/InputOutput.tpl'}
      {else}
        <br /><br />  
        <img src="Recursos/LogoUmg.png" class="rounded mx-auto d-block" alt="Responsive image">
      {/if}
    </div>
 </div>