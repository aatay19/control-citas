<?php
include('../config.php');
include('../layout/sesion.php');
include('../layout/parte1.php');
include('../app/controllers/servicios/listado_servicios.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-12">
          <h1 class="m-0">Listado de servicios
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-create">
                <i class= "fa fa-plus"></i> Agregar nuevo servicio
                </button>
          </h1>
               
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
    <div class="col-md-8">
    <div class="card card-primary collapsed-card">

<div class="card-header">
<h3 class="card-title">servicios Registrados</h3>
<div class="card-tools">
<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
</button>
</div>

</div><div class="card-body" style="display: block;">

<table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                 <th>Nro</th>
                 <th>Servicios</th>
                 <th>Precio</th>
                 <th>Acciones</th>
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
            <td><?php echo $servicio_dato["precio_servicio"];?>$</td>
            <td>
              <center>
              <div class="btn-group">
              <button type="button" class="btn btn-success" data-toggle="modal" 
              data-target="#modal-update<?php echo $id_servicio; ?>">
                <i class= "fa fa-pencil-alt"></i> Editar
                </button>
                
                <!-- modal para actualizar categorias -->
<div class="modal fade" id="modal-update<?php echo $id_servicio; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: green; color: white">
              <h4 class="modal-title">Actualizacion de un servicio</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md12">
                    <div class="form-group">
                        <label for="">Nombre del servicio</label>
                        <input type="text" id="nombre_servicio<?php echo $id_servicio; ?>" value="<?php echo $nombre_servicio ?>" class="form-control">
                        <small style="color: red;display: none"id="lbl_update<?php echo $id_servicio;?>">*Este campo es requerido</small>
                      </div>
                      <div class="form-group">
                        <label for="">precio del servicio</label>
                        <input type="text" id="precio_servicio<?php echo $id_servicio; ?>" value="<?php echo $precio_servicio ?>" class="form-control">
                        <small style="color: red;display: none"id="lbl_update<?php echo $id_servicio;?>">*Este campo es requerido</small>
                      </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-success" id="btn_update<?php echo $id_servicio;?>">actualizar servicio</button>
              
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
        <script>
             $('#btn_update<?php echo $id_servicio;?>').click(function(){

        var nombre_servicio = $('#nombre_servicio<?php echo $id_servicio;?>').val();
        var precio_servicio = $('#precio_servicio<?php echo $id_servicio;?>').val();
       var id_servicio = '<?php echo $id_servicio;?>';
       
       if(nombre_servicio== ""){
            $('#nombre_servicio<?php echo $id_servicio;?>').focus();
            $('#lbl_update<?php echo $id_servicio;?>').css('display','block'); 
          }else if((precio_servicio== "")) {
            $('#precio_servicio<?php echo $id_servicio;?>').focus();
            $('#lbl_update<?php echo $id_servicio;?>').css('display','block'); 
           }else{ 
              var url ="<?php echo $URL;?>/app/controllers/servicios/update_servicio.php";
        $.get(url,{nombre_servicio:nombre_servicio,precio_servicio:precio_servicio,id_servicio:id_servicio},function (datos) {
         $('#respuesta_update<?php echo $id_servicio;?>').html(datos);
        });
            }
       
        });
        </script>
        <div id="respuesta_update<?php echo $id_servicio;?>"></div>
          </div>
              
              <div class="btn-group">
<button type="button" class="btn btn-danger" data-toggle="modal" 
              data-target="#modal-delete<?php echo $id_servicio; ?>">
                <i class= "fa fa-trash"></i> Borrar
                </button>
                <!-- modal para actualizar categorias -->
<div class="modal fade" id="modal-delete<?php echo $id_servicio; ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: red; color: white">
              <h4 class="modal-title">¿Estas segura de borrar este servicio?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md12">
                    <div class="form-group">
                        <label for="">Nombre del servicio</label>
                        <input type="text" id="nombre_servicio<?php echo $id_servicio; ?>" value="<?php echo $nombre_servicio ?>" class="form-control" disabled>
                        <small style="color: red;display: none"id="lbl_delete<?php echo $id_servicio;?>">*Este campo es requerido</small>
                      </div>
                      <div class="form-group">
                        <label for="">precio del servicio</label>
                        <input type="text" id="precio_servicio<?php echo $id_servicio; ?>" value="<?php echo $precio_servicio ?>" class="form-control" disabled>
                        <small style="color: red;display: none"id="lbl_delete<?php echo $id_servicio;?>">*Este campo es requerido</small>
                      </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-danger" id="btn_delete<?php echo $id_servicio;?>">borrar servicio</button>
              
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
        <script>
             $('#btn_delete<?php echo $id_servicio;?>').click(function(){
       var id_servicio = '<?php echo $id_servicio;?>';
              var url ="<?php echo $URL;?>/app/controllers/servicios/delete_servicio.php";
        $.get(url,{id_servicio:id_servicio},function (datos) {
         $('#respuesta_delete<?php echo $id_servicio;?>').html(datos);
        });
       
        });
        </script>
        <div id="respuesta_delete<?php echo $id_servicio;?>"></div>
</div>
            </td>
         </tr>
         
         
         <?php   
        }
        ?>
          </tbody>
                 <th>Nro</th>
                 <th>Servicio</th>
                 <th>Precio</th>
                 <th>Acciones</th>
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
              "info": "Mostrando _START_ a _END_ de _TOTAL_ categorias",
              "infoEmpty": "Mostrando 0 a 0 de 0 categorias",
              "infoFiltered": "(Filtrado de _MAX_ total categorias)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ categorias",
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

   <!-- modal para registrar categorias -->

<div class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header" style="background-color: blue; color: white">
              <h4 class="modal-title">Creacion de un nuevo servicio</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col md12">
                    <div class="form-group">
                        <label for="">Nombre del servicio</label>
                        <input type="text" id="nombre_servicio" class="form-control">
                        <small style="color: red;display: none"id="lbl_create">*Este campo es requerido</small>
                    </div>
                    <div class="form-group">
                        <label for="">Precio del servicio</label>
                        <input type="number" id="precio_servicio" class="form-control">
                        <small style="color: red;display: none"id="lbl_create">*Este campo es requerido</small>
                    </div>
                </div>
              </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <button type="button" class="btn btn-primary" id="btn_create">Registrar servicio</button>
            </div>
            
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
      
<script>
    $('#btn_create').click(function(){
        //alert("guardar");
        var nombre_servicio = $('#nombre_servicio').val();
        var precio_servicio = $('#precio_servicio').val();
        if(nombre_servicio==""){
            $('#nombre_servicio').focus();
            $('#lbl_create').css('display','block');
        }else if((precio_servicio=="")){ 
            $('#precio_servicio').focus();
            $('#lbl_create').css('display','block');
        } else{  
          var url ="<?php echo $URL;?>/app/controllers/servicios/registro_servicio.php";
        $.get(url,{nombre_servicio :nombre_servicio,precio_servicio :precio_servicio},function (datos) {
         $('#respuesta').html(datos);
        });
        }
      });
</script>
<div id="respuesta"></div>



