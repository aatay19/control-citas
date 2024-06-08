<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/clientes/listado_de_clientes.php');
include('../app/controllers/servicios/listado_servicios.php');


?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Registro de una nueva cita</h1>
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
    <div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Cita registrada</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>
<form action="../app/controllers/citas/create.php"method="get">
</div>

            <div class="row">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-3">
            <label for="">Cliente:</label>
                <select name="id_cliente" id="" class="form-control">
                  <?php 
                  foreach($clientes_datos as $clientes_dato){?>
                  <option value="<?php echo $clientes_dato['id_cliente'] ?>"><?php echo $clientes_dato['nombre'] ?></option>
                <?php
                 }   
                  ?>
                </select>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Servicio a realizar:</label>
                <select name="id_servicio"  class="form-control">
                  <?php 
                  foreach($servicio_datos as $servicio_dato){?>
                  <option value="<?php echo $servicio_dato['id_servicio'] ?>"><?php echo $servicio_dato['nombre_servicio'] ;echo" --- bs --- ";echo $servicio_dato['precio_servicio'] ?></option>
                <?php
                 }   
                  ?>
                </select>
            </div>
            
                </div>
                

                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Nota:</label>
                    <textarea name="nota" id="" cols="25" rows="2" class="form-control"></textarea>
                </div>
            
            </div>
            <div class="col-md-2">
            <div class="form-group">
                    <label for="">Fecha de la cita:</label>
                    <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" >
                </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                    <label for="">Precio cita:</label>
                    <input type="number" name="costo_cita" id="precio_servicio" class="form-control" required>
                </div>
            </div>
            </div>
        </div>
        
         </div>
         <div class="form-group">
                <a href="index.php"class="btn btn-secondary">Cancelar</a>
               <button type="submit" class=" btn btn-primary">Guardar</button>
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