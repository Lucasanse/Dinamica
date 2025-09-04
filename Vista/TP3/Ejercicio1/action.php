<?php
include_once("../../estructura/cabecera.php");
include_once("../../../Control/TP3/control_tp3_ej1.php");
include_once("../../../Utiles/funciones.php"); 

$archivo = data_file_submitted("archivo");
$control = new control_tp3_ej1();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $archivo) {
    $resultado = $control->procesarArchivo($archivo);

    if ($resultado["success"]) {
        echo "<div class='alert alert-success'>{$resultado["mensaje"]}</div>";
        echo "<a href='{$resultado["ruta"]}' target='_blank' class='btn btn-primary mt-3'>Ver archivo</a>";
    } else {
        echo "<div class='alert alert-danger'>{$resultado["mensaje"]}</div>";
    }
} else {
    echo "<div class='alert alert-danger'>Error al subir el archivo</div>";
}

echo "<a href='ej1.php' class='btn btn-secondary mt-3 ms-3'>Volver</a>";

include_once("../../estructura/pie.php");

?>

