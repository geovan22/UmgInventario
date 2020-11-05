<div class="container">
    <div class="row">
        <div class="col-10">
            <br /><br />
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Apelldio</th>
                      <th scope="col">usuario</th>
                      <th scope="col">Tipo</th>
                      <th scope="col">Estado</th>
                      <th scope="col">Acciones</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    {foreach from=$usuario item=i}
                        <tr>
                          <td>{$i['Nombre']}</td>
                          <td>{$i['Apellido']}</td>
                          <td>{$i['User']}</td>
                          <td>{$i['Puesto']}</td>
                          
                            {if $i['Estado']==1}
                                <td>
                                    Activo
                                </td>
                            {else}
                                <td>
                                    No Activo
                                </td>
                            {/if}
                          
                          <td>
                            <a href="?controller=Encargado&action=ActivarUser&Tipo=activo&id={$i['id']}" class="stretched-link text-danger" style="position: relative;">Activar_Usuario</a>
                            <hr />
                            <a href="?controller=Encargado&action=ActivarUser&Tipo=noactivo&id={$i['id']}" class="stretched-link text-danger" style="position: relative;">Desactivar_Usuario</a>
                            
                          </td>
                        </tr>
                    {/foreach}
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>