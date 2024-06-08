<?php

include ('../../../config.php');


$email = $_POST['email'];
$password_user =$_POST['password_user'];




$sql = "SELECT * FROM tb_usuarios WHERE email = '$email'AND password_user = '$password_user'";

$query=$pdo->prepare($sql);
$query->execute();

$usuarios = $query->fetchAll(fetch_style:PDO::FETCH_ASSOC);
$CONT=0;
foreach($usuarios as $usuario){
    $CONT= $CONT+ 1;
    $email_tabla=$usuario['email'];
    $nombres =$usuario['nombres'];
}

if($CONT == 0 ){
    echo "Hay algun dato incorrecto, por favor vuelva a intentarlo";
    session_start();
    $_SESSION["mensaje"]="Error datos incorrectos";
    $_SESSION["icono"]="error";
    header("location:".$URL."/index.php");

}else{
    echo "Datos correctos";
session_start();
$_SESSION['sesion_email']=$email;
$_SESSION["icono"]="success";
header("location:".$URL."/index.php");
}