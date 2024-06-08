<?php 
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/clientes/listado_de_clientes.php');
include('../app/controllers/servicios/listado_servicios.php');
include('../app/controllers/citas/update_cita.php');

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Actualizacion de la cita</h1>
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
    <div class="col-md-12">
    <div class="card card-success">
<div class="card-header">
<h3 class="card-title">Cita actualizada</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
</button>
</div>

</div>
<form action="../app/controllers/citas/update.php"method="post">
<input type="text" name="id_cita" value="<?php echo $id_cita_get;?>" hidden>
            <div class="row">
        <div class="col-md-12">
        <div class="row">
            <div class="col-md-2">
            <label for="">Cliente</label>
                <select name="id_cliente" id="" class="form-control">
                <?php 
                  foreach($clientes_datos as $clientes_dato){
                  $nombre_tabla=$clientes_dato['nombre']; 
                  $id_cliente=$clientes_dato['id_cliente']; ?>
                  <option value="<?php echo $id_cliente ?>" <?php if( $nombre_tabla==$nombre){?>selected="selected"<?php }?>><?php echo $nombre_tabla ?>
                </option>
                <?php
                 }   
                  ?>
                </select>
            </div>
            <div class="col-md-3">
            <div class="form-group">
                <label for="">Servicio a realizar #1</label>
                <select name="id_servicio"  class="form-control">
                <?php 
                  foreach($servicio_datos as $servicio_dato){
                  $servicio_tabla=$servicio_dato['nombre_servicio']; 
                  $id_servicio=$servicio_dato['id_servicio']; ?>
                  <option value="<?php echo $id_servicio ?>" <?php if( $servicio_tabla==$servicio){?>selected="selected"<?php }?>><?php echo $servicio_tabla; ?>
                </option>
                <?php
                 }   
                  ?>
                </select>
            </div>
            
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                    <label for="">Nota:</label>
                    <textarea name="nota" id="" cols="25" rows="2" class="form-control"><?php echo $nota;?></textarea>
                </div>
            
            </div>

            <div class="col-md-3">
            <div class="form-group">
                    <label for="">Fecha de la cita:</label>
                    <input type="date" name="fecha_cita" id="fecha_cita" class="form-control" value="<?php echo $fecha_cita;?>">
                </div>
            </div>
            <div class="col-md-2">
            <div class="form-group">
                    <label for="">Precio cita:</label>
                    <input type="number" name="costo_cita" id="precio_servicio" class="form-control"value="<?php echo $costo_cita;?>" required>
                </div>
            </div>
            </div>
        </div>
        
         </div>
         <div class="form-group">
                <a href="index.php"class="btn btn-secondary">Cancelar</a>
               <button type="submit" class=" btn btn-success">Actualizar</button>
            </div>
    </div>
        </form>
    </div>
   </div>
</div>
<hr>
<h1>Lista de servicios</h1>
<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                 <th>Nro</th>
                 <th>Servicios</th>
                 <th>Precio</th>
                
                  </tr>
                  </thead>
                  <tbody>
                  <?php
        $cont=0;
        foreach($servicio_datos as $servicio_dato){
        $id_servicio=$servicio_dato["id_servicio"];
        $precio_servicio=$servicio_dato["precio_servicio"];
        $nombre_servicio=$servicio_dato["nombre_servicio"];?>
         
         <tr>
            <td><?php echo $cont=$cont+1;?></td>
            <td><?php echo $servicio_dato["nombre_servicio"];?></td>
            <td><?php echo $servicio_dato["precio_servicio"];?></td>
            
         </tr>
         
         
         <?php   
        }
        ?>
          </tbody>
                 <th>Nro</th>
                 <th>Servicio</th>
                 <th>Precio</th>
                 
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
include('../layout/mensaje.php');
include("../layout/parte2.php");?>

<script>
  $(function () {
    $("#example1").DataTable({
      "pageLength": 5,
          language: {
              "emptyTable": "No hay información",
              "decimal": "",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ servicios",
              "infoEmpty": "Mostrando 0 a 0 de 0 servicios",
              "infoFiltered": "(Filtrado de _MAX_ total servicios)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ servicios",
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
</div>
    </div>
   </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
include('../layout/mensaje.php');
include('../layout/parte2.php');
?>