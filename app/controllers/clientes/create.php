<!-- controlador-->
<?php
include("../../../config.php");

$nombres=$_POST["nombre"];
$cedula=$_POST["cedula"];
$contacto=$_POST["contacto"];
$direccion=$_POST["direccion"];


$sentencia=$pdo->prepare("INSERT INTO tb_clientes
       ( nombre,  cedula, contacto, direccion, fyh_creacion) 
VALUES (:nombre, :cedula,:contacto,:direccion,:fyh_creacion);");

$sentencia->bindParam(":nombre", $nombres);
$sentencia->bindParam(":cedula", $cedula);
$sentencia->bindParam(":contacto", $contacto);
$sentencia->bindParam(":direccion", $direccion);
$sentencia->bindParam(":fyh_creacion", $fecha_hora);
if($sentencia->execute()){ 
session_start();
       $_SESSION["mensaje"]="Registro exitoso";
       $_SESSION["icono"]="success";
       header("Location: ".$URL."/clientes/");
}else{
       //echo "ERROR!! las contraseñas no son iguales";
       session_start();
       $_SESSION["mensaje"]="ERROR!! ";
       $_SESSION["icono"]="error";
       header("Location: ".$URL."/clientes/create.php");
}

