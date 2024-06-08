<?php

    $sql_servicio="SELECT * FROM tb_servicio";
    $query_servicio=$pdo->prepare($sql_servicio);
$query_servicio->execute();

$servicio_datos = $query_servicio->fetchAll(fetch_style:PDO::FETCH_ASSOC);