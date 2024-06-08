<?php
include("../../../config.php");

$id_cita=$_POST["id_cita"];

$sentencia=$pdo->prepare("DELETE FROM tb_cita WHERE id_cita=:id_cita");

$sentencia->bindParam(":id_cita", $id_cita);
$sentencia->execute();
session_start();
    $_SESSION["mensaje"]="Eliminacion de datos exitosa";
    $_SESSION["icono"]="success";
    header("Location: ".$URL."/citas/");