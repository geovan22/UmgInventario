<div class="container">
    <div class="row">
        <div class="col-10">
            <br /><br />
            <div class="table-responsive">
                <table class="table table-hover table-dark">
                  <thead>
                    <tr>
                      <th scope="col">Codigo</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Categoria</th>
                      <th scope="col">Cantidad</th>
                      <th scope="col">precio</th>
                      <th scope="col">Acciones</th>
                    </tr>
                  </thead>
                  <tbody>
                    {foreach from=$inventario item=i}
                        <tr>
                          <th scope="row">{$i['Codigo']}</th>
                          <td>{$i['Nombre']}</td>
                          <td>{$i['Descripcion']}</td>
                          <td>{$i['Categoria']}</td>
                          <td>{$i['Cantidad']}</td>
                          <td>{$i['Precio']}</td>
                          <td>
                            <a href="?controller=Operario&action=EntradaSalida&id={$i['id']}&tipo=entrada" class="stretched-link text-danger" style="position: relative;">Entrada</a>
                            <a href="?controller=Operario&action=EntradaSalida&id={$i['id']}&tipo=salida" class="stretched-link text-danger" style="position: relative;">Salida</a>
                          </td>
                        </tr>
                    {/foreach}
                  </tbody>
                </table>
            </div>
        </div>
    </div>
</div>