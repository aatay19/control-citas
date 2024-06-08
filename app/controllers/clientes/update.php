<?php 
include('../../../config.php');
$id_cliente= $_POST['id_cliente'];
$nombres=$_POST['nombres'];
$cedula=$_POST['cedula'];
$contactos=$_POST['contacto'];
$direccion=$_POST['direccion'];

$sentencia=$pdo->prepare("UPDATE tb_clientes
       SET nombre=:nombres,
       contacto=:contacto,
       cedula=:cedula,
       direccion=:direccion,
       fyh_actualizacion= :fyh_actualizacion
WHERE id_cliente=:id_cliente");

$sentencia->bindParam(":nombres", $nombres);
$sentencia->bindParam(":cedula", $cedula);
$sentencia->bindParam(":contacto", $contactos);
$sentencia->bindParam(":direccion", $direccion);
$sentencia->bindParam(":fyh_actualizacion", $fecha_hora);
$sentencia->bindParam(":id_cliente", $id_cliente);

if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="Registro exitoso";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   ?>
<script>
    location.href ="<?php echo $URL;?>/clientes";
</script>

   <?php
}else{


       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo acyualizar al proveedor ";
       $_SESSION["icono"]="error";
     header("Location: ".$URL."/clientes/index.php");
    }



?>