<?php 
include('../../../config.php');
$id_servicio= $_GET['id_servicio'];
$nombre_servicio=$_GET['nombre_servicio'];
$precio_servicio=$_GET['precio_servicio'];

$sentencia=$pdo->prepare("UPDATE tb_servicio
       SET nombre_servicio=:nombre_servicio,
       precio_servicio=:precio_servicio,
       fyh_actualizacion= :fyh_actualizacion
WHERE id_servicio=:id_servicio");

$sentencia->bindParam(":nombre_servicio", $nombre_servicio);
$sentencia->bindParam(":precio_servicio", $precio_servicio);
$sentencia->bindParam(":fyh_actualizacion", $fecha_hora);
$sentencia->bindParam(":id_servicio", $id_servicio);

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
       $_SESSION["mensaje"]="ERROR!! no se pudo acyualizar al proveedor ";
       $_SESSION["icono"]="error";
     //  header("Location: ".$URL."/categorias");
    }



?>