<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/empleado/update_empleado.php');
include('../app/controllers/roles/listado_roles.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Actualizar empleado</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
   <!-- se puede poner lo que sea en esta parte-->
    
   <div class="row">
    <div class="col-md-5">
    <div class="card card-success">
<div class="card-header">
<h3 class="card-title">Llene los datos con cuidado</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>

<div class="card-body">
   <div class="row">
    <div class="col-md-12">
    <form action="../app/controllers/empleado/update.php "method="post">
        <input type="text" name="id_empleado" value="<?php echo $id_empleado_get;?>" hidden>
            <div class="form-group">
                <label for="">Nombre y Apellido</label>
                <input type="text"name="nombre" class="form-control"value="<?php echo $nombres;?>" placeholder="Escriba Nombre y Apellido" required>
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="text"name="telefono" class="form-control"value="<?php echo $telefono;?>" placeholder="Escriba su correo" required>
            </div>
            <div class="form-group">
                <label for="">Rol del empleado</label>
                <select name="rol" id="" class="form-control">
                  <?php 
                  foreach($roles_datos as $roles_dato){
                  $rol_tabla=$roles_dato['rol']; 
                  $id_rol=$roles_dato['id_rol']; ?>
                  <option value="<?php echo $id_rol ?>" <?php if( $rol_tabla==$rol){?>selected="selected"<?php }?>><?php echo $rol_tabla ?>
                </option>
                <?php
                 }   
                  ?>
                </select>
                </div>

            <hr>
            <div class="form-group">
                <a href="index.php"class="btn btn-secondary">cancelar</a>
               <button type="submit" class=" btn btn-success">Actualizar</button>
            </div>
        </form>
    </div>
   </div>
</div>

</div>
    </div>
   </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include('../layout/parte2.php');
?>