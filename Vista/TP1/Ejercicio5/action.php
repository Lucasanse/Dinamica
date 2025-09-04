<?php
include_once("../../../Control/TP1/control_tp1_ej5.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // captura $_GET
$control = new control_tp1_ej5();
$resultado = $control->procesarGet($datos);
?>

<h2><?php echo $resultado["mensaje1"]; ?></h2>
<?php if (!empty($resultado["mensaje2"])): ?>
    <h2><?php echo $resultado["mensaje2"]; ?></h2>
<?php endif; ?>

<br><br>
<a href="ej5.php"><h2>Volver al inicio</h2></a>
