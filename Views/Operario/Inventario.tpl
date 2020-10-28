<div class="container">
    <div class="row">
        <div class="col-6">
            <br /><br />
            <form class="was-validated" method="post" action="?controller=Operario&action=guardarProducto">
              
              <div class="mb-3">
                <label for="nombre">Nombre</label>
                <input class="form-control is-invalid" name="nombre" id="nombre" placeholder="nombre del producto" required="" />
              </div>
              
              <div class="mb-3">
                <label for="descripcion">Textarea</label>
                <textarea name="descripcion" class="form-control is-invalid" id="descripcion" placeholder="descripci&oacute;n del producto" required=""></textarea>
              </div>
              
              <div class="mb-3">
                <label for="codigo">C&oacutedigo</label>
                <input class="form-control is-invalid" name="codigo" id="codigo" placeholder="c&oacute;digo del producto" required=""/>
              </div>
              
              <div class="mb-3">
                <label for="categoria">Categoria</label>
                <select name="categoria" class="custom-select" id="categoria" required>
                    {foreach from=$categoria item=c }
                        <option value="{$c['id']}">{$c['Nombre']}</option>
                    {/foreach}}
                </select>
              </div>
              
              <div class="mb-3">
                <label for="cantidad">Cantidad</label>
                <input class="form-control is-invalid" name="cantidad" id="cantidad" placeholder="cantidad del producto" required=""/>
              </div>
              
              <div class="mb-3">
                <label for="precio">Precio</label>
                <input class="form-control is-invalid" name="precio" id="precio" placeholder="precio del producto" required=""/>
              </div>
              
              <div class="input-group is-invalid">
                <div class="input-group-append" >
                   <input type="submit" value="Guardar Producto" class="btn btn-outline-primary" type="button" />
                </div>
              </div>
              
            </form>
        </div>
    </div>
</div>