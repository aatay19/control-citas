<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/clientes/update_clientes.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Actualizar usuario</h1>
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
    <form action="../app/controllers/clientes/update.php "method="post">
        <input type="text" name="id_cliente" value="<?php echo $id_cliente_get;?>" hidden>
            <div class="form-group">
                <label for="">Nombre y Apellido</label>
                <input type="text"name="nombres" class="form-control"value="<?php echo $nombres;?>" placeholder="Escriba Nombre y Apellido" required>
            </div>
            <div class="form-group">
                <label for="">Cedula</label>
                <input type="number"name="cedula" class="form-control"value="<?php echo $cedula;?>" placeholder="Escriba su correo" required>
            </div>
            <div class="form-group">
                <label for="">Contacto</label>
                <input type="number" name="contacto" class="form-control" value="<?php echo $contacto;?>"placeholder="Escriba la contraseña">
            </div>
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control"  value="<?php echo $direccion;?>"placeholder="Vuelva a escribir la contraseña">
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