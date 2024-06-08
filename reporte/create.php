<?php
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../layout/mensaje.php');
?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Creacion del reporte</h1>
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
    <div class="card card-primary collapsed-card">

<div class="card-header">
<h3 class="card-title"> Rellena los datos del reporte</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
</button>
</div>

</div><div class="card-body" style="display: block;">

              
              
             
</div>
<form action="imprimir.php" method="post">
<div class="row">
    <div class="col-md-12">
    <div class="row">
                <div class="col-md-2">
                <div class="form-group">
                <label for="">Dia</label>
                <input type="date"name="dia_reporte" class="form-control"  >
            </div>
                </div>
                <div class="col-md-3">
                <div class="form-group">
                <label for="">Personas atendidas</label>
                <input type="number" name="personas_atendidas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo">
            </div>
            </div>
                <div class="col-md-3">
                <div class="form-group">
                <label for="">Servicios realizados</label>
                <input type="number"name="servicios_realizados" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo" >
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Uñas</label>
                <input type="number" name="uñas_realizadas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo" >
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Cejas</label>
                <input type="number" name="cejas_realizadas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Pestañas</label>
                <input type="number" name="pestañas_realizadas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Depilaciones</label>
                <input type="number" name="depilaciones_realizadas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo">
            </div>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Epilaciones</label>
                <input type="number" name="epilaciones_realizadas" class="form-control" placeholder="Escriba la cantidad de servicios que se realizo">
            </div>
            </div>
    </div>
    <hr>
    <div class="form-group">
                <a href="index.php"class="btn btn-secondary">cancelar</a>
               <button type="submit" class=" btn btn-primary">Imprimir</button>
            </div>
        </div>
</div>        

</form>
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

include("../layout/parte2.php");?>