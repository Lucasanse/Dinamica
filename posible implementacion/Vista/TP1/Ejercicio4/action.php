<?php
include_once("../../../Control/TP1/control_tp1_ej4.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // captura $_GET
$control = new control_tp1_ej4();
$resultado = $control->procesarGet($datos);
?>

<h2><?php echo $resultado["mensaje"]; ?></h2>
<br><br>
<a href="ej4.php"><h2>Volver al inicio</h2></a>