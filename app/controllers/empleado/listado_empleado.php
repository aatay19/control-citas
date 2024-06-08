<?php
  $sql_empleado="SELECT em.id_empleado as id_empleado,em.nombre as nombre, em.telefono as telefono, rol.rol as rol
 FROM tb_empleado as em INNER JOIN tb_roles as rol ON em.id_rol = rol.id_rol";
    $query_empleado=$pdo->prepare($sql_empleado);
$query_empleado->execute();

$empleado_datos = $query_empleado->fetchAll(fetch_style:PDO::FETCH_ASSOC);