<div class="container">
    <div class="row">
        <div class="col-12">
            <br /><br /><br />
            <form method="post" action="?controller=Operario&action=EntradaSalida">
              <div class="row">
                <div class="col">
                  <label for="codigo">Codigo</label>
                  <input type="text" id="codigo" name="codigo" value="{$codigo}" class="form-control" readonly="" />
                </div>
                <div class="col">
                  <label for="nombre">Nombre</label>
                  <input type="text" id="nombre" name="nombre" value="{$nombre}" class="form-control" readonly="" />
                </div>
                <div class="col">
                  <label for="cantidad">Cantidad</label>  
                  <input type="text" id="cantidad" name="cantidad" class="form-control" autofocus="" />
                </div>
                
                <div class="col">
                  <label for="transaccion">Transaccion</label>  
                  <input type="text" name="tipo" value="{$tipo}" readonly="" />
                </div>
                
                <div class="col">
                  <input type="hidden" name="idproducto" value="{$id}" />
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
</div>