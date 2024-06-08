<?php 
include('../../../config.php');
$id_empleado= $_POST['id_empleado'];
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$rol=$_POST["rol"];

$sentencia=$pdo->prepare("UPDATE tb_empleado
       SET nombre=:nombre,
       telefono=:telefono,
       id_rol=:id_rol,
       fyh_actualizacion= :fyh_actualizacion
WHERE id_empleado=:id_empleado");

$sentencia->bindParam(":nombre", $nombre);
$sentencia->bindParam(":telefono", $telefono);
$sentencia->bindParam(":id_rol", $rol);
$sentencia->bindParam(":fyh_actualizacion", $fecha_hora);
$sentencia->bindParam(":id_empleado", $id_empleado);

if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="Actualizacion exitosa";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   ?>
<script>
    location.href ="<?php echo $URL;?>/empleado";
</script>

   <?php
}else{


       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo actualizar al empleado ";
       $_SESSION["icono"]="error";
     header("Location: ".$URL."/empleado/index.php");
    }



?>