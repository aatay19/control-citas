<?php
include("../../../config.php");

$id_rol=$_POST["id_rol"];
$rol=$_POST["rol"];

    $sentencia=$pdo->prepare("UPDATE tb_roles 
    SET rol=:rol,
    FyH_actualizacion=:FyH_actualizacion
     WHERE id_rol=:id_rol");
    
    $sentencia->bindParam(":rol", $rol);
    $sentencia->bindParam(":FyH_actualizacion", $fecha_hora);
    $sentencia->bindParam(":id_rol", $id_rol);
    if($sentencia->execute()){
        session_start();
        $_SESSION["mensaje"]="Se actualizo el rol de forma exitosa";
        $_SESSION["icono"]="success";
        header("Location: ".$URL."/roles/");
    }else{
         session_start();
         $_SESSION["mensaje"]="ERROR!! no se puedo actualizar";
         $_SESSION["icono"]="error";
         header("Location: ".$URL."/roles/update.php? id=".$id_rol);

    }