<?php
include_once("../../../Control/TP1/control_tp1_ej2.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); 
$control = new control_tp1_ej2();
$resultado = $control->procesarHoras($datos);
?>

<?php if ($resultado["mensaje"]): ?>
    <h2><?php echo $resultado["mensaje"]; ?></h2>
<?php else: ?>
    <h2>Horas de cursada por semana:</h2>
    <ul>
        <?php foreach ($resultado["detalle"] as $dia => $h): ?>
            <li><?php echo $dia . ": " . $h . " horas"; ?></li>
        <?php endforeach; ?>
    </ul>
    <h3>Total de horas: <?php echo $resultado["total"]; ?> horas</h3>
<?php endif; ?>

<a href="ej2.php">Volver</a>
