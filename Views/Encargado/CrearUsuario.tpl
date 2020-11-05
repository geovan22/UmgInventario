<div class="container" >
    <div class="row " >
        <div class="col-4">
            <br /><br />
            <form class="was-validated" method="post" action="?controller=Encargado&action=CrearUsuario" >
              <div class="mb-3" >
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control is-invalid" name="nombre" id="nombre" placeholder="nombre del usuario" required="" />
              </div>
              
              <div class="mb-3">
                <label for="apellido">Apellido</label>
                <input type="text" class="form-control is-invalid" name="apellido" id="apellido" placeholder="apellido del usuario" required="" />
              </div>
              
              <div class="mb-3">
                <label for="usuario">Nombre de Usuario</label>
                <input type="text" class="form-control is-invalid" name="usuario" id="usuario" placeholder="usuario" required="" />
              </div>
              
              <div class="mb-3">
                <label for="puesto">Puesto</label>
                <select class="form-control is-invalid" name="puesto" id="puesto">
                    {foreach from=$puesto item=p}
                        <option value="{$p['id']}">{$p['Puesto']}</option>
                    {/foreach}
                </select>
              </div>
              
              <div class="mb-3">
                <label for="fecha">Fecha Nacimiento</label>
                <input type="date" class="form-control is-invalid" name="fecha" id="fecha" placeholder="fecha de nacimiento" required="" />
              </div>
              
              <div class="mb-3">
                <label for="pass">Password</label>
                <input type="password" class="form-control is-invalid" name="pass" id="pass" placeholder="usuario" required="" />
              </div>
              
              <div class="input-group is-invalid">
                <div class="input-group-append" >
                   <input type="submit" value="Crear Usuarios" class="btn btn-outline-primary" type="button" />
                </div>
              </div>
              
            </form>
        </div>
    </div>
</div>
