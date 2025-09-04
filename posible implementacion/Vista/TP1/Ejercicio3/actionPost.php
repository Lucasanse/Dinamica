<?php
include_once("../../../Control/TP1/control_tp1_ej3.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); 
$control = new control_tp1_ej3();
$resultado = $control->procesarPost($datos);
?>

<h2><?php echo $resultado["mensaje"]; ?></h2>
<br><br>
<a href="ej3.php"><h2>Volver al inicio</h2></a>