<div class="container">
    <div class="row">
        <div class="col-6">
            <br /><br />
            <form class="was-validated" method="post" action="?controller=Encargado&action=CrearCategoria">
              
              <div class="mb-3">
                <label for="categoria">Categoria</label>
                <input class="form-control is-invalid" name="categoria" id="categoria" placeholder="nombre de la categoria" required="" />
              </div>
              
              <div class="mb-3">
                <label for="descripcion">Descripcion</label>
                <textarea class="form-control is-invalid" name="descripcion" id="descripcion" placeholder="Descripcion de la categoria" required="" >  </textarea> 
              </div>
              
              <div class="input-group is-invalid">
                <div class="input-group-append" >
                   <input type="submit" value="Crear Categoria" class="btn btn-outline-primary" type="button" />
                </div>
              </div>
              
            </form>
        </div>
    </div>
</div>
