<?php
if((isset( $_SESSION["mensaje"])) AND (isset( $_SESSION["icono"]))) {
    $respuesta= $_SESSION["mensaje"] ;
    $icono= $_SESSION["icono"] ;
    ?>
    <script>
    Swal.fire({
    icon: "<?php echo$icono?>",
    title: "<?php echo $respuesta?>"
  });
  </script>
    <?php
    unset( $_SESSION["mensaje"]);
    unset( $_SESSION["icono"]);
  };
?>
