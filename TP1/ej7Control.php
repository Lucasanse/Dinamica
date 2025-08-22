<?php
if ($_POST) {
    $num1 = (int) $_POST["num1"];
    $num2 = (int) $_POST["num2"];
    $operacion = $_POST["operacion"];
    $resultado = "";

    switch ($operacion) {
        case "suma":
            $resultado = $num1 + $num2;
            $simbolo = "+";
            break;
        case "resta":
            $resultado = $num1 - $num2;
            $simbolo = "-";
            break;
        case "multiplicacion":
            $resultado = $num1 * $num2;
            $simbolo = "×";
            break;
        default:
            $resultado = "No se permite esta operacion";
            $simbolo = "?";
    }

    echo "<h2>Resultado de la operación</h2>";
    echo "<p>Operación: $operacion</p>";
    echo "<p>Operación completa: $num1 $simbolo $num2 = $resultado</p>";
}
?>
