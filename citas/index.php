<?php
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../layout/mensaje.php');
include('../app/controllers/citas/listado_de_citas.php');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de citas</h1>
        </div><!-- /.col -->

      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container-fluid">
        
   <!-- se puede poner lo que sea en esta parte-->
   <div class="row">
    <div class="col-md-10">
    <div class="card card-primary collapsed-card">

<div class="card-header">
<h3 class="card-title">Citas registradas</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
</button>
</div>

</div><div class="card-body" style="display: block;">

<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                 <th>Nro</th>
                 <th>clintes</th>
                 <th>Servicio </th>
                 <th>Nota</th>
                 <th>Costo de la cita</th>
                 <th>Fecha de la cita</th>
                 <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
        $cont=0;
        foreach($cita_datos as $cita_dato){
        $id_cita=$cita_dato["id_cita"];?>
        
         
         <tr>
            <td><?php echo $cont=$cont+1;?></td>
            <td><?php echo $cita_dato["nombre_cliente"];?></td>
            <td><?php echo $cita_dato["nombre_servicio"];?></td>
            <td><?php echo $cita_dato["nota"];?></td>
            <td><?php echo $cita_dato["costo_cita"];?></td>
            <td><?php echo $cita_dato["fecha_cita"];?></td>
            <td>
              <center>
              <div class="btn-group">
              <a  href="show.php? id=<?php echo $id_cita;?>" type="button" class="btn btn-info"><i class="fa fa-eye"></i> ver</a>
              <a  href="update.php? id=<?php echo $id_cita;?>" type="button" class="btn btn-success"><i class="fa fa-pencil-alt"></i> Editar</a>
              <a  href="delete.php? id=<?php echo $id_cita;?>"type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Borrar</a> 
              </div>
              </center>
            </td>
         </tr>
         
         
         <?php   
        }
        ?>
    </tbody>
    <tfoot>
    <tr>
    <th>Nro</th>
                 <th>clintes</th>
                 <th>Servicio </th>
                 <th>Nota</th>
                 <th>costo de la cita</th>
                 <th>Fecha de la cita</th>
                 <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
</div>

</div>
    </div>
   </div>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

include("../layout/parte2.php");?>

<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Citas",
              "infoEmpty": "Mostrando 0 to 0 of 0 Citas",
              "infoFiltered": "(Filtrado de MAX total Citas)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Citas",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscador:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
             },
     
      "responsive": true, "lengthChange": true, "autoWidth": false,
      buttons: [{
                        extend: 'collection',
                        text: 'Reportes',
                        orientation: 'landscape',
                        buttons: [{
                            text: 'Copiar',
                            extend: 'copy'
                        }, {
                            extend: 'pdf',
                        }, {
                            extend: 'csv',
                        }, {
                            extend: 'excel',
                        }, {
                            text: 'Imprimir',
                            extend: 'print'
                        }
                        ]
                    },
                        {
                            extend: 'colvis',
                            text: 'Visol de columnas'
                        }
                    ],
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)'); });
</script>;