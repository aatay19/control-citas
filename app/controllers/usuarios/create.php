<!-- controlador-->
<?php
include("../../../config.php");

$nombres=$_POST["nombres"];
$email=$_POST["email"];
$rol=$_POST["rol"];
$password_user=$_POST["password_user"];
$password_repeat=$_POST["password_repeat"];
if($password_user==$password_repeat){

$sentencia=$pdo->prepare("INSERT INTO tb_usuarios
       ( nombres, email,id_rol,password_user,fyh_creacion) 
VALUES (:nombres, :email,:id_rol,:password_user,:fyh_creacion);");

$sentencia->bindParam(":nombres", $nombres);
$sentencia->bindParam(":email", $email);
$sentencia->bindParam(":id_rol", $rol);
$sentencia->bindParam(":password_user", $password_user);
$sentencia->bindParam(":fyh_creacion", $fecha_hora);
$sentencia->execute();
session_start();
       $_SESSION["mensaje"]="Registro exitoso";
       $_SESSION["icono"]="success";
       header("Location: ".$URL."/usuarios/");
}else{
       //echo "ERROR!! las contraseñas no son iguales";
       session_start();
       $_SESSION["mensaje"]="ERROR!! las contraseñas no son iguales";
       $_SESSION["icono"]="error";
       header("Location: ".$URL."/usuarios/create.php");
}

