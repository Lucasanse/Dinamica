<?php
include_once("../../estructura/cabecera.php");
include_once("../../../Control/TP3/control_tp3_ej2.php");
include_once("../../../Utiles/funciones.php"); 
?>

<main class="flex-grow-1 d-flex justify-content-center align-items-start py-5">
  <div class="container" style="max-width: 800px;">
    <div class="card shadow p-4">

      <?php
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $archivo = data_file_submitted("archivo");

          $control = new control_tp3_ej2();
          $resultado = $control->procesarArchivo($archivo);

          if ($resultado["success"]) {
              echo "<div class='alert alert-success'>{$resultado["mensaje"]}: <b>{$resultado["nombre"]}</b></div>";
              echo "<label class='form-label mt-3'>Contenido del archivo:</label>";
              echo "<textarea class='form-control' rows='10' readonly>" 
                   . htmlspecialchars($resultado["contenido"]) . "</textarea>";
          } else {
              echo "<div class='alert alert-danger'>{$resultado["mensaje"]}</div>";
          }
      } else {
          echo "<div class='alert alert-danger'>Error al procesar la solicitud.</div>";
      }
      ?>

      <a href="ej2.php" class="btn btn-secondary mt-4">Volver</a>
    </div>
  </div>
</main>

<?php
include_once("../../estructura/pie.php");
?>
