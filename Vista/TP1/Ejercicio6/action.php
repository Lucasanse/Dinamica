<?php
include_once("../../../Control/TP1/control_tp1_ej6.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // captura $_GET
$control = new control_tp1_ej6();
$resultado = $control->procesarGet($datos);
?>

<h2><?php echo $resultado["mensaje1"]; ?></h2>
<?php if (!empty($resultado["mensaje2"])): ?>
    <h2><?php echo $resultado["mensaje2"]; ?></h2>
<?php endif; ?>

<?php if (!empty($resultado["mensaje3"])): ?>
    <h2><?php echo $resultado["mensaje3"]; ?></h2>
<?php endif; ?>

<br><br>
<a href="ej6.php"><h2>Volver al inicio</h2></a>
