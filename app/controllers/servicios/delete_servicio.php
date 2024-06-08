<?php
include("../../../config.php");

$id_servicio=$_GET["id_servicio"];

$sentencia=$pdo->prepare("DELETE FROM tb_servicio WHERE id_servicio=:id_servicio");

$sentencia->bindParam(":id_servicio",$id_servicio);

if($sentencia->execute()){
    session_start();
    $_SESSION["mensaje"]="eliminacion exitosa";
    $_SESSION["icono"]="success";
   // header("Location: ".$URL."/categorias/");
   ?>
<script>
    location.href ="<?php echo $URL;?>/servicios";
</script>

   <?php
}else{


       session_start();
       $_SESSION["mensaje"]="ERROR!! no se pudo registrar al proveedor ";
       $_SESSION["icono"]="error";
     //  header("Location: ".$URL."/categorias");
    }
?>
<script>
    location.href ="<?php echo $URL;?>/servicios";
</script>