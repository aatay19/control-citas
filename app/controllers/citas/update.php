<?php 
include('../../../config.php');
$id_cita= $_POST['id_cita'];
$id_cliente=$_POST['id_cliente'];
$id_servicio=$_POST['id_servicio'];
$nota=$_POST["nota"];
$fecha_cita=$_POST["fecha_cita"];
$costo_cita=$_POST["costo_cita"];

$sentencia=$pdo->prepare("UPDATE tb_cita
       SET id_cliente=:id_cliente,
       id_servicio=:id_servicio,
       nota=:nota,
       costo_cita=:costo_cita,
       fecha_cita=:fecha_cita,
       fyh_actualizacion= :fyh_actualizacion
WHERE id_cita=:id_cita");

$sentencia->bindParam(":id_cliente", $id_cliente);
$sentencia->bindParam(":id_servicio", $id_servicio);
$sentencia->bindParam(":nota", $nota);
$sentencia->bindParam(":costo_cita", $costo_cita);
$sentencia->bindParam(":fecha_cita", $fecha_cita);
$sentencia->bindParam(":fyh_actualizacion", $fecha_hora);
$sentencia->bindParam(":id_cita", $id_cita);

if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="Actualizacion exitosa";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   ?>
<script>
    location.href ="<?php echo $URL;?>/citas";
</script>

   <?php
}else{


       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo actualizar al empleado ";
       $_SESSION["icono"]="error";
     header("Location: ".$URL."/citas/index.php");
    }



?>