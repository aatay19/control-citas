
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema de control de citas </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../app/public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../app/public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../app/public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">
   <!-- libreria squeetalert2-->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->

  <?php
  session_start();
  if(isset($_SESSION["mensaje"])){
      $respuesta=$_SESSION["mensaje"];?>
    <script>
      Swal.fire({
  icon: "error",
  title: "<?php echo $respuesta?>",
});
    </script>
  
  <?php
  }
  ?>

  <center>
  <div class="image">
          <img src="image/iconoada.jpeg"  class="img-circle elevation-2" alt="user-image" width="200px">
        </div>
  </center>
  <br>
  <div class="card card-outline ">
    <div class="card-header text-center">
      <a href="./app/public/templeates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de control de citas de </b>"Tu eres preciosa"</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">ingreses sus datos</p>

      <form action="../app/controllers/login/ingreso.php" method="post">
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="password_user" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class=" btn btn-primary btn-block" style="background-color:pink" > <b>Entrar</b></button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../app/public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../app/public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../app/public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>
</html>