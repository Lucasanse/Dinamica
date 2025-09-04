<?php
include_once("../../../Control/TP1/control_tp1_ej1.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted();
$control = new control_tp1_ej1;
$resultado = $control->procesarNumero($datos);
?>

<h2><?php echo $resultado; ?></h2>
<br>
<h2><a href="ej1.php">Volver</a></h2>
