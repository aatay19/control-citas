<!-- controlador-->
<?php
include("../../../config.php");

$nombres=$_POST["nombres"];
$telefono=$_POST["telefono"];
$rol=$_POST["rol"];


$sentencia=$pdo->prepare("INSERT INTO tb_empleado
       ( nombre, telefono,id_rol,fyh_creacion) 
VALUES (:nombre, :telefono,:id_rol,:fyh_creacion);");

$sentencia->bindParam(":nombre", $nombres);
$sentencia->bindParam(":telefono", $telefono);
$sentencia->bindParam(":id_rol", $rol);
$sentencia->bindParam(":fyh_creacion", $fecha_hora);
$sentencia->execute();
if(session_start()){
       $_SESSION["mensaje"]="Registro exitoso";
       $_SESSION["icono"]="success";
       header("Location: ".$URL."/empleado/");
    }else{
       //echo "ERROR!! las contraseñas no son iguales";
       session_start();
       $_SESSION["mensaje"]="ERROR!! hubo un problema";
       $_SESSION["icono"]="error";
       header("Location: ".$URL."/empleado/create.php");
}