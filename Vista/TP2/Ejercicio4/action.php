<?php
include_once("../../estructura/cabecera.php");
include_once("../../../Control/TP2/control_tp2_ej4.php");
include_once("../../../Utiles/funciones.php");

?>

<div class="container mt-5">
    <div class="card bg-success text-white shadow">
        <div class="card-header">
            <h3 class="mb-0">La peli introducida es:</h3>
        </div>
        <div class="card-body">
            <?php
            $datos = data_submitted(); 
            $control = new control_tp2_ej4;
            $resultados = $control->procesarDatos($datos);

            if ($resultados) {
                echo '<ul class="list-unstyled">';
                foreach ($resultados as $campo => $valor) {
                    echo '<li><strong>' . $campo . ':</strong> ' . $valor . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<div class="alert alert-danger">No se recibieron datos del formulario.</div>';
            }
            ?>
        </div>
        <div class="card-footer text-end">
            <a href="ej4.php" class="btn btn-light">Volver</a>
        </div>
    </div>
</div>

<?php
include_once("../../estructura/pie.php");
?>
