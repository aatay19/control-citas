<?php 
include('../../../config.php');

$nombre_servicio=$_GET['nombre_servicio'];
$precio_servicio=$_GET['precio_servicio'];

$sentencia=$pdo->prepare("INSERT INTO tb_servicio
       (nombre_servicio, precio_servicio, fyh_creacion) 
VALUES (:nombre_servicio,:precio_servicio,:fyh_creacion);");

$sentencia->bindParam(":nombre_servicio", $nombre_servicio);
$sentencia->bindParam(":precio_servicio", $precio_servicio);
$sentencia->bindParam(":fyh_creacion", $fecha_hora);

if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="Registro exitoso";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   ?>
<script>
    location.href ="<?php echo $URL;?>/servicios";
</script>

   <?php
}else{


       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo registrar el servicio ";
       $_SESSION["icono"]="error";
     //  header("Location: ".$URL."/categorias");
    }
    ?>
    <script>
    location.href ="<?php echo $URL;?>/servicios";
</script>

<?php

?>