<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de citas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
 <!-- libreria squeetalert2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
   <!-- DataTables -->
   <link rel="stylesheet" href="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 <!-- jQuery -->
<script src="<?php echo $URL;?>/app/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
</head>
<body class="hold-transition sidebar-mini">




<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>

      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Sistema De citas</a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo $URL;?>/index.php" class="brand-link">
      <img src="<?php echo $URL;?>/login/image/iconoada.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" width="100px"style="opacity: .8">
      <span class="brand-text font-weight-light">Sistema de citas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo $URL;?>/login/image/iconoada.jpeg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $nombres_sesion." - ".$rol_sesion?></a>
        </div>
      </div>

      
        
        <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- usuario-->
          <?php 
          if($rol_sesion == "Administrador"){?> 
          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Usuarios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Usuarios</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/usuarios/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de usuario</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- Empleado-->
          <li class="nav-item  ">
            <a href="#" class="nav-link active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
  <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0M6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9z"/>
</svg>
              <p>
                Empleado
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/empleado/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de Empleado</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/empleado/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de Empleado</p>
                </a>
              </li>
            </ul>
          </li>
<!-- roles-->


<li class="nav-item  ">
            <a href="#" class="nav-link active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 16 16">
  <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
  <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1z"/>
</svg>
              <p>
                Roles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/roles/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de roles</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/roles/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de roles</p>
                </a>
              </li>
            </ul>
          </li>

      <!-- clientes-->


          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de clientes</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de clientes</p>
                </a>
              </li>
            </ul>
          </li>

      <!--servicios-->
          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/servicios" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de servicios</p>
                </a>
            </li>
            </ul>
          </li>

          <!--Citas -->

          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Citas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/citas/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de citas</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/citas/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de citas</p>
                </a>
              </li>
            </ul>
          </li>


           <!--Reporte diario -->

          
           <li class="nav-item  ">
            <a href="#" class="nav-link active">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-book-fill" viewBox="0 0 16 16">
  <path d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783"/>
</svg>
              <p>
                  Reporte
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/reporte/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de reporte</p>
                </a>
              </li>
            </ul>
          </li>



          
          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link btn btn-danger">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->

        <?php
      }elseif($rol_sesion == "Empleado"){?>
                  <!-- Sidebar Menu -->
       <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

      <!-- clientes-->


          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-address-card"></i>
              <p>
                Clientes
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de clientes</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/clientes/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de clientes</p>
                </a>
              </li>
            </ul>
          </li>

      <!--servicios-->
          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tag"></i>
              <p>
                Servicios
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/servicios" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de servicios</p>
                </a>
            </li>
            </ul>
          </li>

          <!--Citas -->

          <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Citas
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/citas/index.php" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listado de citas</p>
                </a>
            </li>
              <li class="nav-item">
                <a href="<?php echo $URL;?>/citas/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de citas</p>
                </a>
              </li>
            </ul>
          </li>


           <!--Reporte diario -->

           <li class="nav-item  ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Reporte
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?php echo $URL;?>/reporte/create.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Creacion de reporte</p>
                </a>
              </li>
            </ul>
          </li>


          
          <li class="nav-item">
            <a href="<?php echo $URL;?>/app/controllers/login/cerrar_sesion.php" class="nav-link btn btn-danger">
              <i class="nav-icon fas fa-door-closed"></i>
              <p>
                Cerrar sesion
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
          <?php
        }?> 

        </aside>
