<?php 
include('../../../config.php');

$id_cliente=$_GET['id_cliente'];
$servicio=$_GET['id_servicio'];
$nota=$_GET['nota'];
$costo_cita=$_GET['costo_cita'];
$fecha_cita=$_GET['fecha_cita'];

$pdo->beginTransaction();
$sentencia=$pdo->prepare("INSERT INTO tb_cita
        (fecha_cita, id_cliente, id_servicio, nota , costo_cita, fyh_creacion) 
VALUES (:fecha_cita,:id_cliente,:id_servicio,:nota ,:costo_cita,:fyh_creacion);");

$sentencia->bindParam(":fecha_cita", $fecha_cita);
$sentencia->bindParam(":id_cliente", $id_cliente);
$sentencia->bindParam(":id_servicio", $servicio);
$sentencia->bindParam(":nota", $nota);
$sentencia->bindParam(":costo_cita", $costo_cita);
$sentencia->bindParam(":fyh_creacion", $fecha_hora);
if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="Registro exitoso";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   $pdo->commit();
   ?>
<script>
    location.href ="<?php echo $URL;?>/citas";
</script>

   <?php
}else{

    $pdo->rollBack();
       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo registrar el servicio ";
       $_SESSION["icono"]="error";
     //  header("Location: ".$URL."/categorias");
    }
    ?>
    <script>
    location.href ="<?php echo $URL;?>/citas";
</script>

<?php

?>