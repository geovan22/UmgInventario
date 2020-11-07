                    <div class="container">
    <div class="row">
        <div class="col-10">
            <br /><br />
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Acciones</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    {foreach from=$categoria item=i}
                        <tr>
                          <td>{$i['Nombre']}</td>
                          <td>{$i['Descripcion']}</td>
                          <td>
                            <a href="?controller=Encargado&action=EliminarCategoria&id={$i['id']}" class="stretched-link text-danger" style="position: relative;">Eliminar Categoria</a>
                        
                          </td>
                        </tr>
                    {/foreach}
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>