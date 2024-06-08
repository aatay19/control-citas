<?php
//variables globales
define('servidor','localhost');
define('usuario','root');
define('password','');
define('BD','tuerespreciosa');

$servidor= "mysql:dbname=".BD.";host=".servidor;

try{
    $pdo= new PDO($servidor,usuario, password ,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    //echo" la conexion a la base de datos fue con exito";
} 
catch (PDOException $e){
   // print_r($e);
   echo "error al conectar a la base de datos";
}

$URL="http://localhost:3000/xampp/htdocs/tu%20eres%20preciosa";
date_default_timezone_set("America/Caracas" );
$fecha_hora=date("y-m-d H:i:s");



if(isset( $_SESSION["mensaje"])){
    $respuesta= $_SESSION["mensaje"] ;?>
    <script>
    Swal.fire({
    icon: "error",
    title: "<?php echo $respuesta?>",
  });
  </script>
    <?php
    unset( $_SESSION["mensaje"]);
  }?>