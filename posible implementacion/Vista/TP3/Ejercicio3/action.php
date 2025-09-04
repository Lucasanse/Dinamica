<?php
include_once("../../estructura/cabecera.php");
include_once("../../../Control/TP3/control_tp3_ej3.php");
include_once("../../../Utiles/funciones.php");
?>

<div class="container mt-5">
    <div class="card bg-success text-white shadow">
        <div class="card-header">
            <h3 class="mb-0">La peli introducida es:</h3>
        </div>
        <div class="card-body">
            <?php
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $datos = data_submitted();          
                $archivo = data_file_submitted("archivo");   

                $control = new control_tp3_ej3();
                $resultado = $control->procesar($datos, $archivo);

                if ($resultado['exito']) {
                    echo "<div class='text-center my-4'>
                            <img src='{$resultado['imagen']}' 
                                 alt='Imagen de la película' 
                                 class='img-fluid rounded-3 shadow-lg border border-light'
                                 style='max-width:400px; object-fit:cover;'>
                          </div>";

                    // Datos
                    echo '<ul class="list-unstyled">';
                    foreach ($resultado['datos'] as $clave => $valor) {
                        echo "<li><strong>$clave:</strong> $valor</li>";
                    }
                    echo '</ul>';
                } else {
                    echo "<div class='alert alert-danger'>{$resultado['mensaje']}</div>";
                }
            } else {
                echo '<div class="alert alert-danger">No se recibieron datos del formulario.</div>';
            }
            ?>
        </div>
        <div class="card-footer text-end">
            <a href="index.php" class="btn btn-light">Volver</a>
        </div>
    </div>
</div>

<?php
include_once("../../estructura/pie.php");
?>
