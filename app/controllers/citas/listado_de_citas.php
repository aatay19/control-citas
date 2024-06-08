<?php
  $sql_cita="SELECT * ,
  cli.nombre as nombre_cliente,cli.cedula as cedula,cli.contacto as contacto,cli.direccion as direccion,
  ser.nombre_servicio as nombre_servicio,ser.precio_servicio as precio_servicio
  
  FROM tb_cita as ct
  INNER JOIN tb_clientes as cli ON ct.id_cliente = cli.id_cliente
  INNER JOIN tb_servicio as ser ON ct.id_servicio = ser.id_servicio";
    $query_cita=$pdo->prepare($sql_cita);
$query_cita->execute();

$cita_datos = $query_cita->fetchAll(fetch_style:PDO::FETCH_ASSOC);