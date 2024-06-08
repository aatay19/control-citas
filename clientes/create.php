<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Registro de un nuevo cliente</h1>
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
<h3 class="card-title">cliente registrado</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>

<div class="card-body">
   <div class="row">
    <div class="col-md-12">
        <form action="../app/controllers/clientes/create.php"method="post">
            <div class="form-group">
                <label for="">Nombre y Apellido</label>
                <input type="text"name="nombre" class="form-control" placeholder="Escriba Nombre y Apellido" required>
            </div>
            <div class="form-group">
                <label for="">cedula</label>
                <input type="number"name="cedula" class="form-control" placeholder="Escriba su correo" required>
            </div>
            <div class="form-group">
                <label for="">Contacto</label>
                <input type="number" name="contacto" class="form-control" placeholder="Escriba la contraseña" required>
            </div>
            <div class="form-group">
                <label for="">Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Vuelva a escribir la contraseña">
            </div>
            <hr>
            <div class="form-group">
                <a href="index.php"class="btn btn-secondary">cancelar</a>
               <button type="submit" class=" btn btn-primary">Guardar</button>
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
include('../layout/mensaje.php');
include('../layout/parte2.php');
?>