<?php
include_once("../../../Control/TP1/control_tp1_ej7.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // captura $_POST
$control = new control_tp1_ej7();
$resultado = $control->procesarPost($datos);

if (isset($resultado["mensaje"])) {
    echo "<h2>" . $resultado["mensaje"] . "</h2>";
} else {
    echo "<h2>Resultado de la operación</h2>";
    echo "<p>Operación: " . $resultado["operacion"] . "</p>";
    echo "<p>Operación completa: " . $resultado["num1"] . " " . $resultado["simbolo"] . " " . $resultado["num2"] . " = " . $resultado["resultado"] . "</p>";
}
?>

<br><br>
<a href="ej7.php"><h2>Volver al inicio</h2></a>
