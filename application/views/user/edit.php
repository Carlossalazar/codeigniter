<div class="row">
    <div class="col-md-7 col-md-offset-2">
        <form method="POST" action="<?php echo base_url('User/update')?>">
            <?php foreach ($datosUsuario as $value) { ?>

            <input type="hidden" name="txtUsuid" value="<?php echo $value->usu_id; ?>">
            <div class="form-group">
              <label for="exampleInputEmail1">Perfil</label>

                  <?php
                  $lista = array();
                  foreach ($selPerfil as $registro) {
                      $lista[$registro->per_id] = $registro->per_nombre;
                  }

                  echo form_dropdown('txtPerid',$lista,$value->per_id, 'class="form-control"');
                  ?>

            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" placeholder="nombres">
          </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Apellido</label>
            <input type="text" name="txtApellido" class="form-control" id="exampleInputEmail1" placeholder="Apellidos">
          </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Correo Electrónico</label>
            <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="correo">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Telefono</label>
            <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="telefono">
          </div>

    <?php } ?>
            <button type="submit" class="btn btn-default">Actualizar Usuario</button>
          </form>
    </div>

</div>
