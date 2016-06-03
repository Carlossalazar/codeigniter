<h1>Formulario de Registro</h1>

<form method="POST" action="<?php echo base_url('User/insert')?>">
  <div class="form-group">
    <label for="exampleInputEmail1">Perfil</label>
    <select name="txtIdper" class="form-control">
      <?php foreach ($selPerfil as $value) { ?>
        <option value="<?php echo $value->per_id?>"> <?php echo $value->per_nombre; ?> </option>
       <?php } ?>

    </select>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="txtNombre" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Apellido</label>
    <input type="text" name="txtApellido" class="form-control" id="exampleInputEmail1" placeholder="Apellido">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Correo</label>
    <input type="text" name="txtCorreo" class="form-control" id="exampleInputEmail1" placeholder="Correo">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Telefono</label>
    <input type="text" name="txtTelefono" class="form-control" id="exampleInputPassword1" placeholder="Telefono">
  </div>

  <button type="submit" class="btn btn-default">Registrar Usuario</button>
</form>

<<?php
  print_r($selPerfil);

 ?>
