<?php
$id_cliente_get=$_GET['id'];
$sql_clientes="SELECT * FROM tb_clientes  where id_cliente ='$id_cliente_get' ";
$query_clientes=$pdo->prepare($sql_clientes);
$query_clientes->execute();

$clientes_datos = $query_clientes->fetchAll(fetch_style:PDO::FETCH_ASSOC);

foreach($clientes_datos as $clientes_dato){
    $nombres=$clientes_dato['nombre'];
    $cedula=$clientes_dato['cedula'];
    $contacto=$clientes_dato['contacto'];
    $direccion=$clientes_dato['direccion'];
}