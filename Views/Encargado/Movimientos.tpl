<div class="container">
    <div class="row">
        <div class="col-12">
            <br /><br /><br />
            <form method="post" action="?controller=Encargado&action=BuscarMovimiento">
              <div class="row">
               
                <div class="col">
                  <label for="tipo">Tipo</label>
                  <select name="tipo" id="tipo">
                    {foreach from=$tipo item=$t}
                        <option value="{$t['id']}">{$t['Movimiento']}</option>
                    {/foreach}
                  </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <label>De</label>
                  <input type="date" name="de" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  
                  <label>Hasta</label>
                  <input type="date" name="hasta" />
                  
                </div>

              </div>
              <br /><br />
              <div class="input-group is-invalid">
                <div class="input-group-append" >
                   <input type="submit" value="Precesar" class="btn btn-outline-primary" type="button" />
                </div>
              </div>
            </form>
        </div>
    </div>
    <br /><hr /><br />
    {if isset($movimiento)}
        <div class="row">
            <div class="col-10">
                <br /><br />
                <div class="table-responsive">
                    <table class="table table-hover table-dark table-responsive">
                      <thead>
                        <tr>
                          <th scope="col">Usuario</th>
                          <th scope="col">Tipo</th>
                          <th scope="col">Producto</th>
                          <th scope="col">Descripcion</th>
                          <th scope="col">Fecha</th>
                          <th scope="col">Cantidad</th>
                          
                        </tr>
                      </thead>
                      <tbody>
                        {foreach from=$movimiento item=i}
                            <tr>
                              <th scope="row">{$i['User_2']}</th>
                              <td>{$i['Movimiento']}</td>
                              <td>{$i['Nombre']}</td>
                              <td>{$i['Descripcion']}</td>
                              <td>{$i['Fecha']}</td>
                              <td>{$i['Cantidad']}</td>
                              
                            </tr>
                        {/foreach}
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    {/if}
</div>