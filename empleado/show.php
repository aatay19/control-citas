<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/empleado/show_empleado.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Informacion del empleado</h1>
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
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Datos del empleado </h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>

<div class="card-body">
   <div class="row">
    <div class="col-md-12">
            <div class="form-group">
                <label for="">Nombre y Apellido</label>
                <input type="text"name="nombres" class="form-control" value="<?php echo $nombres;?>"disabled>
            </div>
            <div class="form-group">
                <label for="">Telefono</label>
                <input type="telefono"name="telefono" class="form-control" value="<?php echo $telefono;?>"disabled>
            </div>
            
            <div class="form-group">
                <label for="">Rol el usuario</label>
                <input type="text"name="rol" class="form-control"value="<?php echo $rol;?>"disabled>
            </div>
            <hr>
            <div class="form-group">
                <a href="index.php"class="btn btn-secondary">volver atras</a>
               
            </div>
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
include('../layout/mensaje.php');
include('../layout/parte2.php');
?>