<?php
include_once("../../estructura/cabecera.php");
include_once("../../../Control/TP2/control_tp2_ej3.php");
include_once("../../../Utiles/funciones.php");
?>

<?php

error_reporting(0);
$datos = data_submitted();
$obj = new control_tp2_ej3();
$respuesta = $obj->verificarLogin($datos);

echo "<h2 style='text-align:center;'>$respuesta</h2>";

?>

<?php
include_once("../../estructura/pie.php");
?>