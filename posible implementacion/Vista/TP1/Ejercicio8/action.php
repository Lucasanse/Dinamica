<?php
include_once("../../../Control/TP1/control_tp1_ej8.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // obtiene $_POST
$control = new control_tp1_ej8();
$resultado = $control->procesarPost($datos);

if (isset($resultado["mensaje"])) {
    echo "<h2>" . $resultado["mensaje"] . "</h2>";
} else {
    echo "<h2>Resultado</h2>";
    echo "<p>Edad: " . $resultado["edad"] . " años</p>";
    echo "<p>Estudiante: " . ($resultado["esEstudiante"] ? "SI" : "NO") . "</p>";
    echo "<p>El precio de la entrada es: $" . $resultado["precio"] . "</p>";
}
?>

<br>
<a href="ej8.php">Volver a consultar</a>
