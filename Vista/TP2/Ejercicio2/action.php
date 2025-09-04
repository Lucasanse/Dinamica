<?php
include_once("../../../Control/TP2/control_tp1_ej2.php");
include_once("../../../Utiles/funciones.php");

$datos = data_submitted(); // captura $_GET
$control = new control_tp2_ej2();
$resultado = $control->procesarGet($datos);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../css/estilo.css">
    <title>actionTP2E2</title>
</head>
<body>
    <h2><?php echo $resultado; ?></h2>

<br><br>
<a href="ej2.php"><h2>Volver al inicio</h2></a>

</body>
</html>



