<?php 
include('config.php');
include('layout/sesion.php');
include('layout/parte1.php');
include('app/controllers/usuarios/listado_de_usuarios.php');
include('app/controllers/clientes/listado_de_clientes.php');
include('app/controllers/servicios/listado_servicios.php');
include('app/controllers/empleado/listado_empleado.php');
include('app/controllers/citas/listado_de_citas.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Bienvenido Usuario al Sistema control de citas</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <script>
  Swal.fire({
  title: "Has iniciado sesion exitosamente <br><?php echo $email_sesion;?>",
  text: "Dale al boton para seguir",
  icon: "success",
 
});
</script>
<?php

unset($_SESSION["mensaje"]);
unset ($_SESSION["icono"]);
?> 
  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
   <!-- se puede poner lo que sea en esta parte-->
   Contenido del sistema
   <br><br>
   <div class="row">
   <?php 
          if($rol_sesion == "Administrador"){?> 
<!-- usuarios-->
<div class="col-lg-3 col-6">
 
<div class="small-box bg-warning">
<div class="inner">
<?php
$cont_usuario=0;
foreach($usuarios_datos as $usuarios_dato){
 $cont_usuario= $cont_usuario + 1;
}
?>
<h3><?php echo $cont_usuario;?></h3>
<p>Usuarios registrados</p>
</div>
<a href="<?php echo $URL;?>/usuarios/create.php">
<div class="icon">
<i class="fas fa-user-plus"></i>
</div>
</a>
<a href="<?php echo $URL;?>/usuarios" class="small-box-footer">
Mas informacion <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<!-- clientes-->

<div class="col-lg-3 col-6">
 
<div class="small-box bg-info">
<div class="inner">
<?php
$cont_cliente=0;
foreach($clientes_datos as $clientes_dato){
 $cont_cliente= $cont_cliente + 1;
}
?>
<h3><?php echo $cont_cliente;?></h3>
<p>Clientes registrados</p>
</div>
<a href="<?php echo $URL;?>/clientes">
<div class="icon">
<i class="fas fa-address-card"></i>
</div>
</a>
<a href="<?php echo $URL;?>/clientes/create" class="small-box-footer">
Mas informacion <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<!-- servicios-->

<div class="col-lg-3 col-6">
 
<div class="small-box bg-success">
<div class="inner">
<?php
$cont_servicios=0;
foreach($servicio_datos as $servicio_dato){
 $cont_servicios= $cont_servicios + 1;
}
?>
<h3><?php echo $cont_servicios;?></h3>
<p>Servicios registardos</p>
</div>
<a href="<?php echo $URL;?>/servicios">
<div class="icon">
<i class="fas fa-tags"></i>
</div>
</a>
<a href="<?php echo $URL;?>/servicios" class="small-box-footer">
Mas informacion <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

<!-- citas-->

<div class="col-lg-3 col-6">
 
<div class="small-box bg-primary">
<div class="inner">
<?php
$cont_citas=0;
foreach($cita_datos as $cita_dato){
 $cont_citas= $cont_citas + 1;
}
?>
<h3><?php echo $cont_citas ;?></h3>
<p>citas registradas</p>
</div>
<a href="<?php echo $URL;?>/citas/create.php">
<div class="icon">
<i class="fas fa-list"></i>
</div>
</a>
<a href="<?php echo $URL;?>/citas" class="small-box-footer">
Mas informacion <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>
<!-- empleado-->
<div class="col-lg-3 col-6">
 
<div class="small-box bg-primary">
<div class="inner">
<?php
$cont_empleado=0;
foreach($empleado_datos as $empleado_dato){
 $cont_empleado= $cont_empleado + 1;
}
?>
<h3><?php echo $cont_empleado;?></h3>
<p>Empleados registrados</p>
</div>
<a href="<?php echo $URL;?>/empleado/create.php">
<div class="icon">
<svg xmlns="http://www.w3.org/2000/svg" width="100" height="85" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0m-2-6a3 3 0 1 1-6 0 3 3 0 0 1 6 0M8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
  <path d="M8.256 14a4.5 4.5 0 0 1-.229-1.004H3c.001-.246.154-.986.832-1.664C4.484 10.68 5.711 10 8 10q.39 0 .74.025c.226-.341.496-.65.804-.918Q8.844 9.002 8 9c-5 0-6 3-6 4s1 1 1 1z"/>
</svg>
</div>
</a>
<a href="<?php echo $URL;?>/empleado" class="small-box-footer">
Mas informacion <i class="fas fa-arrow-circle-right"></i>
</a>
</div>
</div>

</div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper --> <?php
}elseif($rol_sesion == "Empleado"){?>
 
 
 <!-- clientes-->

<div class="col-lg-3 col-6">
 
 <div class="small-box bg-info">
 <div class="inner">
 <?php
 $cont_cliente=0;
 foreach($clientes_datos as $clientes_dato){
  $cont_cliente= $cont_cliente + 1;
 }
 ?>
 <h3><?php echo $cont_cliente;?></h3>
 <p>Clientes registrados</p>
 </div>
 <a href="<?php echo $URL;?>/clientes">
 <div class="icon">
 <i class="fas fa-address-card"></i>
 </div>
 </a>
 <a href="<?php echo $URL;?>/clientes/create" class="small-box-footer">
 Mas informacion <i class="fas fa-arrow-circle-right"></i>
 </a>
 </div>
 </div>
 
 <!-- servicios-->
 
 <div class="col-lg-3 col-6">
  
 <div class="small-box bg-success">
 <div class="inner">
 <?php
 $cont_servicios=0;
 foreach($servicio_datos as $servicio_dato){
  $cont_servicios= $cont_servicios + 1;
 }
 ?>
 <h3><?php echo $cont_servicios;?></h3>
 <p>Servicios registardos</p>
 </div>
 <a href="<?php echo $URL;?>/servicios">
 <div class="icon">
 <i class="fas fa-tags"></i>
 </div>
 </a>
 <a href="<?php echo $URL;?>/servicios" class="small-box-footer">
 Mas informacion <i class="fas fa-arrow-circle-right"></i>
 </a>
 </div>
 </div>
 
 <!-- citas-->
 
 <div class="col-lg-3 col-6">
  
 <div class="small-box bg-primary">
 <div class="inner">
 <?php
 $cont_citas=0;
 foreach($cita_datos as $cita_dato){
  $cont_citas= $cont_citas + 1;
 }
 ?>
 <h3><?php echo $cont_citas ;?></h3>
 <p>citas registradas</p>
 </div>
 <a href="<?php echo $URL;?>/citas/create.php">
 <div class="icon">
 <i class="fas fa-list"></i>
 </div>
 </a>
 <a href="<?php echo $URL;?>/citas" class="small-box-footer">
 Mas informacion <i class="fas fa-arrow-circle-right"></i>
 </a>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
 
 <?php
        }?>
<?php

include('layout/parte2.php');?>