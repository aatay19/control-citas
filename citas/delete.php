<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/clientes/listado_de_clientes.php');
include('../app/controllers/servicios/listado_servicios.php');
include('../app/controllers/citas/show_cita.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">¿Estas seguro de borrar esta cita?</h1>
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
    <div class="col-md-12">
    <div class="card card-danger">
<div class="card-header">
<h3 class="card-title">Revisa que ya se realizo esta cita</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>
<form action="../app/controllers/citas/delete_cita.php" method="post">
<input type="text" name="id_cita" value="<?php echo $id_cita_get;?>" hidden>
            <div class="row">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
            <label for="">Cliente</label>
                <input name="id_cliente" id="" class="form-control" value="<?php echo $nombre;?>"disabled>
                </input>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Servicio a realizar #1</label>
                <input name="id_servicio"  class="form-control"value="<?php echo $servicio;?>"disabled>
                </input>
            </div>
                </div>
                

            <div class="col-md-3">
            <div class="form-group">
                <label for="">Nota</label>
                <input type="text"class="form-control"value="<?php echo $nota;?>"disabled>
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                    <label for="">Fecha de la cita:</label>
                    <input type="date" name="fecha_cita" id="fecha_cita" class="form-control"value="<?php echo $fecha_cita;?>"disabled >
                </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                    <label for="">Precio cita:</label>
                    <input type="number" name="costo_cita" id="precio_servicio" class="form-control"value="<?php echo $costo_cita;?>"disabled<?php echo " bs";?>>
                </div>
            </div>
            </div>
        </div>
        
         </div>
         <div class="form-group">
                <a href="index.php"class="btn btn-secondary">Cancelar</a>
               <button type="submit" class=" btn btn-danger">Eliminar</button>
            </div>
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